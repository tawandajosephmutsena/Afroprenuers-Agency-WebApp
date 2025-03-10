<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Routing\Controller as BaseController;

class GanttController extends BaseController
{
    public function __construct()
    {
        $this->middleware(['web', 'auth']);
    }

    public function getData()
    {
        try {
            $user = auth()->user();
            
            if (!$user) {
                Log::error('Unauthenticated user trying to access Gantt data');
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }

            if (!$user->can('view_any_project') || !$user->can('view_gantt_chart')) {
                Log::error('Unauthorized access attempt to Gantt data by user: ' . $user->email);
                return response()->json(['message' => 'Unauthorized.'], 403);
            }

            Log::info('User authenticated: ' . $user->email);

            $data = ['data' => []];
            
            // Get projects
            $projects = Project::with('tasks')->get();
            
            foreach ($projects as $project) {
                $data['data'][] = [
                    'id' => 'p_' . $project->id,
                    'text' => $project->name,
                    'start_date' => $project->start_date->format('Y-m-d H:i'),
                    'end_date' => $project->end_date ? $project->end_date->format('Y-m-d H:i') : null,
                    'progress' => $project->progress / 100,
                    'type' => 'project',
                    'status' => $project->status,
                    'open' => true
                ];
                
                // Add tasks for each project
                foreach ($project->tasks as $task) {
                    $data['data'][] = [
                        'id' => 't_' . $task->id,
                        'text' => $task->title,
                        'start_date' => $task->start_date ? $task->start_date->format('Y-m-d H:i') : $task->created_at->format('Y-m-d H:i'),
                        'end_date' => $task->due_date ? $task->due_date->format('Y-m-d H:i') : null,
                        'parent' => 'p_' . $project->id,
                        'progress' => $task->progress / 100,
                        'type' => 'task',
                        'status' => $task->status
                    ];
                }
            }

            Log::info('Gantt data:', $data);
            
            return response()->json($data);
        } catch (\Exception $e) {
            Log::error('Error in getData: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to load Gantt data'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $type = substr($id, 0, 1);
            $modelId = substr($id, 2);
            
            Log::info('Updating ' . ($type === 'p' ? 'project' : 'task') . ' with ID: ' . $modelId);
            Log::info('Request data:', $request->all());
            
            if ($type === 'p') {
                $model = Project::findOrFail($modelId);
                $updateData = [
                    'name' => $request->text,
                    'start_date' => Carbon::parse($request->start_date),
                    'end_date' => $request->end_date ? Carbon::parse($request->end_date) : null,
                    'progress' => (float) $request->progress * 100,
                    'status' => $request->status
                ];
            } else {
                $model = Task::findOrFail($modelId);
                $updateData = [
                    'title' => $request->text,
                    'start_date' => Carbon::parse($request->start_date),
                    'due_date' => $request->end_date ? Carbon::parse($request->end_date) : null,
                    'progress' => (float) $request->progress * 100,
                    'status' => $request->status
                ];
            }
            
            Log::info('Update data:', $updateData);
            
            $model->update($updateData);
            
            Log::info('Update successful');
            
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error('Error in update: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return response()->json(['error' => 'Failed to update item: ' . $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $type = $request->type ?? 'task';
            
            if ($type === 'project') {
                $project = Project::create([
                    'name' => $request->text,
                    'start_date' => Carbon::parse($request->start_date),
                    'end_date' => $request->end_date ? Carbon::parse($request->end_date) : null,
                    'progress' => $request->progress * 100,
                    'status' => $request->status ?? 'planning'
                ]);
                
                return response()->json([
                    'success' => true,
                    'id' => 'p_' . $project->id
                ]);
            } else {
                $projectId = substr($request->parent, 2);
                
                $task = Task::create([
                    'title' => $request->text,
                    'start_date' => Carbon::parse($request->start_date),
                    'due_date' => $request->end_date ? Carbon::parse($request->end_date) : null,
                    'progress' => $request->progress * 100,
                    'status' => $request->status ?? 'todo',
                    'project_id' => $projectId
                ]);
                
                return response()->json([
                    'success' => true,
                    'id' => 't_' . $task->id
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Error in store: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to create item'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $type = substr($id, 0, 1);
            $modelId = substr($id, 2);
            
            if ($type === 'p') {
                Project::findOrFail($modelId)->delete();
            } else {
                Task::findOrFail($modelId)->delete();
            }
            
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error('Error in destroy: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to delete item'], 500);
        }
    }
} 
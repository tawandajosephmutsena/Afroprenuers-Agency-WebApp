<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectGanttController extends Controller
{
    public function getData()
    {
        try {
            $tasks = Task::with(['project'])->get();
            
            Log::info('Tasks retrieved:', ['count' => $tasks->count()]);
            
            $data = $tasks->map(function ($task) {
                return [
                    'id' => $task->id,
                    'text' => $task->name,
                    'start_date' => $task->start_date->format('Y-m-d H:i'),
                    'duration' => $task->duration,
                    'progress' => $task->progress ?? 0,
                    'parent' => $task->parent_id,
                    'status' => $task->status,
                ];
            });

            Log::info('Gantt data prepared:', ['data_count' => count($data)]);
            
            return response()->json(['data' => $data]);
            
        } catch (\Exception $e) {
            Log::error('Error in getData:', ['error' => $e->getMessage()]);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function updateTask(Request $request)
    {
        try {
            Log::info('Update task request:', ['id' => $request->id, 'data' => $request->task]);
            
            $task = Task::findOrFail($request->id);
            
            $task->update([
                'name' => $request->task['text'],
                'description' => $request->task['description'] ?? null,
                'start_date' => $request->task['start_date'],
                'duration' => $request->task['duration'],
                'progress' => $request->task['progress'],
                'status' => $request->task['status'] ?? 'pending',
            ]);

            return response()->json(['success' => true]);
            
        } catch (\Exception $e) {
            Log::error('Error in updateTask:', ['error' => $e->getMessage()]);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
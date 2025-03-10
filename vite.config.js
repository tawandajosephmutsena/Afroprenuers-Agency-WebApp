import { defineConfig } from "vite";
import react from '@vitejs/plugin-react';

export default defineConfig(async () => {
  const laravel = await import('laravel-vite-plugin');
  return {
    plugins: [
      laravel.default({
        input: [
          "resources/css/app.css",
          "resources/js/app.jsx",
          "resources/css/filament/admin/theme.css",
          'resources/css/app.css',
          'resources/js/app.jsx',
        ],
        refresh: true,
      }),
      react({
        include: /\.(js|jsx|ts|tsx)$/,
      }),
    ],
    resolve: {
      extensions: ['.js', '.jsx'],
    },
    optimizeDeps: {
      esbuildOptions: {
        loader: {
          '.js': 'jsx',
        },
      },
    },
  };
});







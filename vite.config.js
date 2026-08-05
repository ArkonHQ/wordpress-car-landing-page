import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  // Use relative paths for assets
  base: './',
  server: {
    cors: true,
    strictPort: true,
    port: 5173,
    origin: 'http://localhost:5173'
  },
  build: {
    outDir: 'dist',
    emptyOutDir: true,
    manifest: true,
    // WP themes don't need index.html, we compile our css/js here
    rollupOptions: {
      input: resolve(import.meta.dirname, 'src/main.js'),
      output: {
        entryFileNames: 'js/main.js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name.endsWith('.css')) return 'css/main.css';
          return 'assets/[name].[ext]';
        }
      }
    }
  }
});

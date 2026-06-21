// Post-build script to generate cache-busting version for non-Vite assets
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

const manifestPath = path.join(__dirname, 'public', 'build', 'manifest.json');

if (!fs.existsSync(manifestPath)) {
    console.log('No Vite manifest found. Skipping version generation.');
    process.exit(0);
}

const manifest = JSON.parse(fs.readFileSync(manifestPath, 'utf-8'));
const version = Date.now().toString(36);

// Write version to a JSON file that Blade can read
const versionPath = path.join(__dirname, 'public', 'assets', 'version.json');
fs.writeFileSync(versionPath, JSON.stringify({ version, generated: new Date().toISOString() }));

console.log(`Cache version generated: ${version}`);
console.log('Build complete.');

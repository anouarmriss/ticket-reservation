import fs from "fs";
import path from "path";
import { fileURLToPath } from "url";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Source and destination paths
const sourceManifest = path.join(__dirname, "public/build/.vite/manifest.json");
const destManifest = path.join(__dirname, "public/build/manifest.json");

// Copy the file
try {
    fs.copyFileSync(sourceManifest, destManifest);
    console.log("Manifest copied successfully");
} catch (err) {
    console.error("Error copying manifest:", err);
}

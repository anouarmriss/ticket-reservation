import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: "resources/js/app.js",
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "resources/js"),
            "~": path.resolve(__dirname, "resources"),
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
    base: "/",
    build: {
        manifest: true,
        outDir: "public/build",
        assetsDir: "assets",
    },
});

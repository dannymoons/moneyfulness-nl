import path, { resolve as resolvePath } from "path";
import { fileURLToPath } from "url";

import MiniCssExtractPlugin from "mini-css-extract-plugin";
import CssMinimizerPlugin from "css-minimizer-webpack-plugin";
import TerserPlugin from "terser-webpack-plugin";
import BrowserSyncPlugin from "browser-sync-webpack-plugin";
import CopyPlugin from "copy-webpack-plugin";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const proxy = {
  // adress: 'Moneyfulness.local',
  adress: "moneyfulness.local",
  name: "Moneyfulness",
};

export default (env) => {
  // ----------------------------
  // Configuration: Entries
  // ----------------------------
  const entry = {
    script: resolvePath(__dirname, "assets/js/main.js"),
    style: resolvePath(__dirname, "assets/scss/main.scss"),
    admin: resolvePath(__dirname, "assets/scss/admin.scss"),
  };

  // ----------------------------
  // Configuration: Output
  // ----------------------------
  const output = {
    filename: "[name].js",
    path: resolvePath(__dirname, "dist"),
    clean: true,
  };

  // ----------------------------
  // Configuration: Modules
  // ----------------------------
  const module = {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              sourceMap: true,
            },
          },
          "postcss-loader",
          {
            loader: "sass-loader",
            options: {
              sourceMap: true,
            },
          },
          "webpack-import-glob-loader",
        ],
      },
    ],
  };

  // ----------------------------
  // Configuration: Plugins
  // ----------------------------
  const defaultPlugins = [
    new MiniCssExtractPlugin(),
    new CopyPlugin({
      patterns: [
        {
          from: "*",
          to: resolvePath(__dirname, "dist"),
          context: resolvePath(__dirname, "assets/img"),
          noErrorOnMissing: true,
        },
        {
          from: "*",
          to: resolvePath(__dirname, "dist"),
          context: resolvePath(__dirname, "assets/fonts"),
          noErrorOnMissing: true,
        },
      ],
    }),
  ];

  const devPlugins = [
    new BrowserSyncPlugin(
      {
        proxy: proxy?.adress,
        logPrefix: proxy?.name,
        ui: false,
        files: ["**/*.php", "**/*.css", "**/*.js"],
        reloadDebounce: 1000,
      },
      { reload: false }
    ),
  ];

  const plugins =
    env.mode === "development" && proxy?.adress
      ? [...defaultPlugins, ...devPlugins]
      : [...defaultPlugins];

  // ----------------------------
  // Configuration: Devtool
  // ----------------------------
  const devtool = env.mode === "development" ? "source-map" : false;

  // ----------------------------
  // Configuration: Optimization
  // ----------------------------
  const optimization = {
    minimizer: [
      new CssMinimizerPlugin(),
      new TerserPlugin({
        // minify: TerserPlugin.swcMinify,
      }),
    ],
  };

  // ----------------------------
  // Configuration: Watch Options
  // ----------------------------
  const watchOptions = {
    aggregateTimeout: 500,
    ignored: "/node_modules/",
  };

  // ----------------------------
  // Configuration: Mode
  // ----------------------------
  const mode = env.mode;

  const config = {
    entry,
    output,
    module,
    plugins,
    devtool,
    optimization,
    watchOptions,
    mode,
  };

  return config;
};

#!/bin/bash

cd themes/clean-base/less
lessc ./build.less ../css/theme.css --clean-css="--s1 --advanced" --source-map=../css/theme.css.map
cd ../../clean-contrasted/less
lessc ./build.less ../css/theme.css --clean-css="--s1 --advanced" --source-map=../css/theme.css.map
cd ../../clean-bordered/less
lessc ./build.less ../css/theme.css --clean-css="--s1 --advanced" --source-map=../css/theme.css.map
cd ../../clean-dark/less
lessc ./build.less ../css/theme.css --clean-css="--s1 --advanced" --source-map=../css/theme.css.map
cd ../../clean-smart4life/less
lessc ./build.less ../css/theme.css --clean-css="--s1 --advanced" --source-map=../css/theme.css.map
cd ../../..
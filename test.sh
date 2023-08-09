#!/usr/bin/env bash

curl 'http://localhost:8000' \
  -X 'POST' \
  -H 'Content-Type: application/json' \
  --data-binary "@request.json"

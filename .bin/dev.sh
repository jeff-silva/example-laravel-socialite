#!/bin/bash
reset

# Função para verificar se o arquivo .env.example existe em uma subpasta
function check_env_example() {
  local subpasta="$1"

  if [ ! -f "$subpasta/.env" ]; then
    if [ -f "$subpasta/.env.example" ]; then
        cp "$subpasta/.env.example" "$subpasta/.env"
    fi
  fi
}

check_env_example .

for subpasta in */ ; do
  check_env_example "$subpasta"
done

docker compose up --build --force-recreate --remove-orphans
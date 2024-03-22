#!/bin/bash
reset

# Função para verificar se o arquivo .env.example existe em uma subpasta
function check_env_example() {
  local subpasta="$1"

  if [ -f "$subpasta/.env.example" ]; then
    # cp "$subpasta/.env.example" "$subpasta/.dev"
  fi
}

# Percorrer todas as subpastas da pasta atual
for subpasta in */ ; do
  # Chamar a função para verificar se o arquivo .env.example existe na subpasta
  check_env_example "$subpasta"
done

# docker-compose up --build --force-recreate --remove-orphans
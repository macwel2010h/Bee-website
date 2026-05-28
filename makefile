start:
	docker compose -f Docker/Docker_compose.yml up -d --build

destroy:
	docker compose -f Docker/Docker_compose.yml down
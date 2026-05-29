start:
	@docker compose -f Docker/Docker_compose.yml up -d --build
	@echo "Server started on http://localhost:8080"

destroy:
	@docker compose -f Docker/Docker_compose.yml down
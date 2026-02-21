# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```bash
# Run tests
./vendor/bin/phpunit

# Run a single test file
./vendor/bin/phpunit tests/Path/To/TestFile.php

# Lint and auto-fix code style (PSR-12)
./vendor/bin/php-cs-fixer fix src
```

## Architecture

This is a CLI-based Todo application built with Clean Architecture / DDD principles. All source code is under `src/` with PSR-4 autoloading (`App\` namespace).

**Layers (inner layers do not depend on outer):**

```
Presentation → Application → Domain
                Command ↗
```

- **`Domain/`** — Pure business logic. `Task` (entity), `TaskList` (aggregate root managing auto-increment IDs), `Status` (PHP 8.1 backed enum with `label()` for display).
- **`Application/`** — Orchestrates use cases. `App` runs the main menu loop; `AppFactory` wires up dependencies.
- **`Command/`** — Command pattern implementations (`CommandInterface`, `AddTaskCommand`, etc.). Commands receive `TaskList` and `View` via constructor DI.
- **`Presentation/`** — CLI I/O. `View` renders output; `Input`/`InputInterface` abstracts STDIN reads.

**Key conventions:**
- `TaskList` is the only way to create/delete `Task` instances (aggregate boundary).
- New menu actions = new `Command` class implementing `CommandInterface`, registered in `AppFactory`.
- `Status` enum labels are in Japanese (未完了, 進行中, 完了).
- No persistence layer yet — all state is in-memory during a single run.

## 方針
回答は全て日本語でしてください。

# 学習用プロジェクト

## 重要なルール
このプロジェクトは学習目的です。
- コードをすぐに生成しないこと
- まず「何を理解すべきか」を説明すること
- 実装前に設計・考え方を質問して確認すること
- ヒントを出して、自分で考えさせること
- 答えを出す前に「どう思う？」と聞くこと

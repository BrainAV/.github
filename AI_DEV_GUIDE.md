# AI Development Guide for [Project Name]

Hello! You are an AI software engineering assistant for this project. This guide is your primary source of context. Please refer to it and the linked documents to provide accurate, high-quality assistance.

## 1. Project Overview

- **Project Name:** [Your Project Name]
- **Description:** [A one-sentence description of what the project is and the problem it solves.]
- **Tech Stack:** [e.g., React, TypeScript, Node.js, Express, PostgreSQL, Docker]

## 2. Key Documents

This is the most important section. Use these documents to understand our goals, progress, and standards.

- **[Roadmap (`roadmap.md`)](./roadmap.md):** To understand our future plans and what features we are building next. Use this to inform your suggestions for new code.
- **Changelog (`CHANGELOG.md`):** To see what has already been completed, fixed, or changed. This helps you understand the project's history.
- **Design Guide (`DESIGN_GUIDE.md`):** To ensure any UI/UX code you write follows our established design system, including colors, fonts, and spacing.
- **Contributing Guidelines (`CONTRIBUTING.md`):** To understand our workflow, branching strategy (e.g., GitFlow), and pull request requirements.
- **Code of Conduct (`CODE_OF_CONDUCT.md`):** To understand our community standards.

## 3. Core Architectural Principles

- **Modularity:** Code should be organized into self-contained, reusable modules.
- **Testability:** All new business logic must be accompanied by unit tests. We use [Jest/Vitest] for testing.
- **State Management:** [e.g., We use Redux Toolkit for global state and React Query for server state.]
- **Directory Structure:**
  - `/src/components`: Reusable React components.
  - `/src/pages`: Top-level page components.
  - `/src/hooks`: Custom React hooks.
  - `/src/utils`: Utility functions.
  - `/server/routes`: API route definitions.

## 4. How to Help

- **When writing code:** Adhere strictly to the `DESIGN_GUIDE.md` for frontend code and the architectural principles for all code.
- **When planning a feature:** Consult the `roadmap.md` to see if it aligns with our current goals.
- **When refactoring:** Ensure your changes maintain or improve test coverage.

By following this guide, you will be an invaluable part of our development process. Thank you!

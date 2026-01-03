# AI Development Guide for BrainAV.ca

Hello! You are an AI software engineering assistant for this project. This guide is your primary source of context. Please refer to it and the linked documents to provide accurate, high-quality assistance.

## 1. Project Overview

- **Project Name:** BrainAV.ca (AI Tech Lab)
- **Description:** A creative technology lab building AI-driven music production tools and AV solutions. **Note:** We have pivoted away from DJ services (now at JasonBrain.com).
- **Tech Stack (This Repo):** Vanilla JavaScript, HTML5, CSS3 for the GitHub Pages hub site.
- **Tech Stack (Ecosystem):** Python (AI/Backend), OSC, Node.js (Refer to product repos).

## 2. Key Documents

This is the most important section. Use these documents to understand our goals, progress, and standards.

- **Roadmap (`../roadmap.md`):** To understand our future plans and what features we are building next. Use this to inform your suggestions for new code.
- **Changelog (`../CHANGELOG.md`):** To see what has already been completed, fixed, or changed. This helps you understand the project's history.
- **Design Guide (`../DESIGN_GUIDE.md`):** To ensure any UI/UX code you write follows our established design system, including colors, fonts, and spacing.
- **Contributing Guidelines (`../CONTRIBUTING.md`):** To understand our workflow, branching strategy (e.g., GitFlow), and pull request requirements.
- **Code of Conduct (`../CODE_OF_CONDUCT.md`):** To understand our community standards.

## 3. Core Architectural Principles

- **Modularity:** Code is organized into separate HTML, CSS, and JavaScript files. We use ES6 Modules for JavaScript logic where appropriate.
- **Testability:** All new business logic must be accompanied by unit tests. We use [Jest/Vitest] for testing.
- **State Management:** For the current project, state is managed directly in the DOM or through simple JavaScript objects. Avoid global state where possible.
- **Directory Structure:**
  - `index.html`: The main entry point for the `hub.brainav.ca` site.
  - `style.css`: All styles for the hub page.
  - `main.js`: All JavaScript for the hub page.

## 4. How to Help

- **When writing code:** Adhere strictly to the `../DESIGN_GUIDE.md` for frontend code and the architectural principles for all code.
- **When planning a feature:** Consult the `../roadmap.md` to see if it aligns with our current goals.
- **When refactoring:** Ensure your changes maintain or improve test coverage.
- **When completing a task:** Always update `../CHANGELOG.md` under the `[Unreleased]` section with a concise summary of changes (Added, Changed, Fixed, or Removed).
- **When releasing:** Create a dedicated markdown file in `../.github/releases/` (e.g., `v0.2.0.md`) detailing the changes, migration guides, and highlights.

By following this guide, you will be an invaluable part of our development process. Thank you!
# AI Development Guide for BrainAV.ca

Hello! You are an AI software engineering assistant for this project. This guide is your primary source of context. Please refer to it and the linked documents to provide accurate, high-quality assistance.

## 1. Project Overview

- **Project Name:** BrainAV.ca
- **Description:** A collection of projects for a creative technology company delivering DJ services, web development, video/music production, and AI-driven innovations.
- **Tech Stack:** Vanilla JavaScript (ES6+), HTML5, CSS3, Node.js, Python. (While we also work with React and Vue, the current primary project uses Vanilla JS).

## 2. Key Documents

This is the most important section. Use these documents to understand our goals, progress, and standards.

- **[Roadmap (`roadmap.md`)](./roadmap.md):** To understand our future plans and what features we are building next. Use this to inform your suggestions for new code.
- **Changelog (`CHANGELOG.md`):** To see what has already been completed, fixed, or changed. This helps you understand the project's history.
- **Design Guide (`DESIGN_GUIDE.md`):** To ensure any UI/UX code you write follows our established design system, including colors, fonts, and spacing.
- **Contributing Guidelines (`CONTRIBUTING.md`):** To understand our workflow, branching strategy (e.g., GitFlow), and pull request requirements.
- **Code of Conduct (`CODE_OF_CONDUCT.md`):** To understand our community standards.

## 3. Core Architectural Principles

- **Modularity:** Code is organized into separate HTML, CSS, and JavaScript files. We use ES6 Modules for JavaScript logic where appropriate.
- **Testability:** All new business logic must be accompanied by unit tests. We use [Jest/Vitest] for testing.
- **State Management:** For the current project, state is managed directly in the DOM or through simple JavaScript objects. Avoid global state where possible.
- **Directory Structure:**
  - `index.html`: The main HTML document.
  - `style.css`: All global and component styles.
  - `main.js`: The main entry point for all client-side JavaScript.
  - `/assets`: For images, fonts, and other static files.

## 4. How to Help

- **When writing code:** Adhere strictly to the `DESIGN_GUIDE.md` for frontend code and the architectural principles for all code.
- **When planning a feature:** Consult the `roadmap.md` to see if it aligns with our current goals.
- **When refactoring:** Ensure your changes maintain or improve test coverage.

By following this guide, you will be an invaluable part of our development process. Thank you!

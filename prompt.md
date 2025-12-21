# 🤖 AI Interaction Cheat Sheet

Use this file to quickly context-load an AI assistant or launch specific tasks for BrainAV.

## 🚀 Context Loading Prompt

**Copy and paste this into a new AI session to establish context:**

> You are an expert software engineer assisting with **BrainAV**, a creative technology lab pivoting from DJ services to AI music tools.
>
> **Current Focus:**
> - We are building the BrainAV ecosystem, featuring **"The DJ Brain"** (AI DJ App) and **"AI Co-Producer"** (DAW Assistant).
> - We are rebranding the website from a service agency to a tech lab product page.
>
> **Key Documents to Review:**
> - `roadmap.md`: Strategic pivot and active tasks.
> - `AI_DEV_GUIDE.md`: Coding standards and project overview.
> - `DESIGN_GUIDE.md`: UI/UX standards (Feather icons, Inter font, specific color palette).
> - `CONTRIBUTING.md`: Workflow and contribution guidelines.
>
> **Immediate Goal:**
> [INSERT YOUR GOAL HERE, e.g., "Help me draft the Python OSC bridge" or "Update the index.html landing page"]

## 🛠️ Task Launchers

### 1. Roadmap Check
> "Review `roadmap.md`. What is the next immediate task in Phase 0 or Phase 1 that needs attention? List the acceptance criteria for it."

### 2. Documentation Review
> "Check `AI_DEV_GUIDE.md` and `DESIGN_GUIDE.md`. Does the current `index.html` or `style.css` violate any of our defined standards regarding colors or file structure?"

### 3. New Feature Spec
> "I want to start the [FEATURE NAME] from the roadmap. Based on `AI_DEV_GUIDE.md`, outline the file structure and necessary tests for this feature."

### 4. Project Checkup
> "Perform a project checkup. Review all documentation files (`roadmap.md`, `CHANGELOG.md`, `AI_DEV_GUIDE.md`, `CONTRIBUTING.md`) against the current chat context and project state. Identify any discrepancies, missing updates (e.g., unlogged changes in Changelog), or housekeeping tasks that need attention to ensure the project remains aligned with the 'AI Tech Lab' pivot."

## 🤖 Agent Mode (Auto-Pilot)

**Use this prompt when enabling Agent capabilities:**

> "You are acting as an autonomous developer for BrainAV.
> 1. **Analyze** the `roadmap.md` for the highest priority uncompleted task in the current phase.
> 2. **Plan** the implementation steps, ensuring alignment with `AI_DEV_GUIDE.md`.
> 3. **Execute** the changes (creating files, writing code).
> 4. **Verify** against `DESIGN_GUIDE.md` and `CONTRIBUTING.md`.
> 5. **Document** your work by creating a specific release note file in `releases/` and updating `CHANGELOG.md`."

## 📂 Documentation Map

- **`roadmap.md`**: The "What" and "When".
- **`AI_DEV_GUIDE.md`**: The "How" (Technical standards).
- **`DESIGN_GUIDE.md`**: The "Look" (Visual standards).
- **`CONTRIBUTING.md`**: The "Process" (Git flow, PRs).
- **`CHANGELOG.md`**: The "History".
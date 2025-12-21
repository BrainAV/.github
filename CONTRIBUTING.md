# Contributing to BrainAV

Thank you for your interest in contributing to BrainAV! We are building the next generation of AI music tools.

## 👋 Welcome

BrainAV has pivoted from a service-based agency to an AI Tech Lab. We welcome contributions to our open-source tools, particularly `ai-coproducer`.

## 🛠️ Tech Stack

- **Core Logic:** Python 3.10+
- **Integration:** Open Sound Control (OSC) via `python-osc` or `AbletonOSC`.
- **Frontend:** Vanilla JavaScript, HTML5, CSS3 (Variables).
- **AI Backend:** Ollama (Local), Gemini/Claude (Cloud).

## 🚀 Getting Started

1.  **Fork the repository.**
2.  **Clone your fork:** `git clone https://github.com/BrainAV/[repo].git`
3.  **Create a branch:** `git checkout -b feature/amazing-feature`

## 📝 Workflow

1.  **Check the Roadmap:** Ensure your contribution aligns with `roadmap.md`.
2.  **Follow Standards:**
    - Code: See `AI_DEV_GUIDE.md`.
    - Design: See `DESIGN_GUIDE.md`.
3.  **Commit Messages:** Use clear, descriptive messages (e.g., `feat: add OSC client` or `fix: mobile nav layout`).
4.  **Update Changelog & Releases:** Add a line to the `[Unreleased]` section of `CHANGELOG.md` for any notable change. For official releases, create a detailed markdown file in `.github/releases/`.

## 🧪 Testing

- **Python:** Ensure unit tests pass (using `pytest`).
- **Frontend:** Verify responsiveness and accessibility.
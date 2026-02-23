# Project Roadmap: BrainAV Organization

This document tracks the high-level goals of the BrainAV organization and the specific maintenance tasks for this repository (Profile & Hub).

## 🎯 Strategic Vision

- **From Services to Products:** Transitioning from live event services to developing tools for creators.
- **Product Ecosystem:** Developing core creative tools:
  - **"The DJ Brain":** AI DJ application for mixing and performance (playing music).
  - **"AI Co-Producer":** AI Executive Producer for DAWs (making music).
- **Open & Modular:** Prioritizing open-source protocols (OSC) and local LLM support over proprietary lock-ins.

---

## 🛠️ This Repository: Hub & Profile

*Focus: Maintaining the public face of the organization on GitHub.*

- [x] **Repo Restructuring**
  - [x] Pivot repo to serve only `hub.brainav.ca` and Org Profile.
  - [x] Remove legacy PHP/Main Site source (moved to private repo).
  - [x] Cleanup `roadmap.md` to reflect new scope.
- [ ] **Profile & Documentation**
  - [x] Maintain Organization Profile (`profile/README.md`).
  - [x] Maintain Repository README (`README.md`).
  - [x] Refine `.gemini/PROMPT.md` and `PROMPT_GUIDE.md` for improved agent workflow.
- [x] **Hub Website (`index.html`)**
  - [x] Update product cards as new repositories are made public.
  - [x] Ensure design consistency with `DESIGN_GUIDE.md`.

---

## 🌍 Ecosystem Overview (High Level)

*Detailed development tasks are tracked in individual product repositories.*

### 🧠 Phase 1: AI Co-Producer
*Focus: Bridging LLMs with DAWs (Ableton Live)*
- [ ] **Core:** Python OSC Server & LLM Backend.
- [ ] **Features:** Text-to-MIDI, Sound Design Recipes.

### 📱 Phase 2: Hardware & Visuals
*Focus: Interfaces and dedicated hardware*
- [x] **Visuals:** Audio-Visualizer (Prototype Released).
- [x] **Streaming:** Radio Stream Player (Live).
- [ ] **Infrastructure:** DigiPi Integration with Flight Deck.
- [ ] **Embedded:** Raspberry Pi optimization.

### 🏗 Phase 3: Platform Unification
*Focus: Centralizing the web platform with the Core CMS.*
- [x] **CMS Backend:** `core-cms` developed and powers `brainav.ca`.
- [ ] **Integration:** Align product frontends with CMS authentication and APIs.
- [ ] **Auth:** Unified user authentication via Core CMS.

---

> **Note:** Legacy DJ services are now managed at JasonBrain.com.
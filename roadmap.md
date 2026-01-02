# Project Roadmap: BrainAV Tech Lab

This document outlines the strategic pivot of BrainAV from a service-based agency to a product-focused AI & Technology Lab.

## 🎯 Strategic Vision

- **From Services to Products:** Transitioning from live event services to developing tools for creators.
- **Product Ecosystem:** Developing two core AI agents:
  - **"The DJ Brain":** AI DJ application for mixing and performance (playing music).
  - **"AI Co-Producer":** AI Executive Producer for DAWs (making music).
- **Open & Modular:** Prioritizing open-source protocols (OSC) and local LLM support over proprietary lock-ins.

---

## 🔄 Phase 0: The Pivot (Immediate)

- [x] **Epic: Brand & Web Migration**
  - [x] **Rebrand `BrainAV.ca`:** Update landing page to showcase "AI Tech Lab" and "AV Tools".
  - [x] **Service Offloading:** Remove booking forms and wedding DJ content.
  - [x] **Redirect Traffic:** Add clear call-to-actions directing service inquiries to JasonBrain.com.
  - [x] **Content Consolidation:** Link to the existing Tech Blog and Music Blog on JasonBrain.com.
  - [ ] **Deployment:**
    - [x] Configure DNS for `brainav.ca` (cPanel) and subdomain (GitHub Pages).
    - [x] Upload `public/` folder to cPanel `public_html`.
    - [ ] **Database:** Plan database schema for user accounts/settings (Phase 1 preparation).
  - [x] **Epic: AI Agent Readiness**
    - [x] Maintain `prompt.md` (now `.gemini/PROMPT.md`) for autonomous agent context.
    - [x] Establish structured release notes workflow in `releases/` folder.

## 🧠 Phase 1: AI Co-Producer (The Foundation)

*Focus: Bridging LLMs with DAWs (Ableton Live)*

- [ ] **Epic: Core Architecture**
  - [ ] **Repository Setup:** Initialize separate `ai-coproducer` repository for Python/OSC logic.
  - [ ] **Bridge Prototype:** Develop initial Python OSC server.
  - [ ] **Integration:** Implement OSC connectivity using `python-osc`.
  - [ ] **LLM Backend:** Integrate pluggable backend (Gemini, Claude, Ollama).
- [ ] **Epic: Generative Capabilities**
  - [ ] **Text-to-MIDI:** Generate melodies, chords, and drum patterns from prompts.
  - [ ] **Sound Design Recipes:** AI guidance for synth parameter adjustments.
  - [ ] **Arrangement Scaffolding:** AI-assisted song structure mapping (Intro, Verse, Drop).

## 📱 Phase 2: The Controller & Hardware

*Focus: Interfaces and dedicated hardware*

- [ ] **Epic: Mobile Integration**
  - [ ] Develop Android "Voice-to-Command" app for hands-free studio control.
  - [ ] Implement context-aware suggestions based on project state.
- [ ] **Epic: Embedded Systems**
  - [ ] Build and release disk images for Raspberry Pi 5 & Jetson Nano.
  - [ ] Optimize local LLM inference for edge devices.
- [x] **Epic: Visuals (Audio-Visualizer)**
  - [x] **Repository Setup:** Initialize `Audio-Visualizer` repository.
  - [x] **Prototype:** Create basic audio-reactive sketch.
- [ ] **Epic: Infrastructure (DigiPi)**
  - [ ] **Integration:** Integrate DigiPi with the Flight Deck framework.

## 🛠 Phase 3: Desktop & VST Integration

- [ ] **Epic: Seamless Workflow**
  - [ ] Develop VST3 Wrapper for in-DAW control (minimizing context switching).
  - [ ] Create advanced visualization for AI "thought process" inside the DAW.

---

> **Note:** Legacy DJ services are now managed at JasonBrain.com.
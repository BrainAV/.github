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

- [ ] **Epic: Brand & Web Migration**
  - [ ] **Rebrand `BrainAV.ca`:** Update landing page to showcase "AI Tech Lab" and "AV Tools".
  - [ ] **Service Offloading:** Remove booking forms and wedding DJ content.
  - [ ] **Redirect Traffic:** Add clear call-to-actions directing service inquiries to JasonBrain.com.
  - [ ] **Content Consolidation:** Link to the existing Tech Blog and Music Blog on JasonBrain.com.
  - [ ] **Epic: AI Agent Readiness**
    - [ ] Maintain `prompt.md` for autonomous agent context.
    - [ ] Establish structured release notes workflow in `releases/` folder.

## 🧠 Phase 1: AI Co-Producer (The Foundation)

*Focus: Bridging LLMs with DAWs (Ableton Live)*

- [ ] **Epic: Core Architecture**
  - [ ] Develop Python-based bridge application.
  - [ ] Implement OSC (Open Sound Control) connectivity using `AbletonOSC`.
  - [ ] Integrate pluggable LLM backend (Gemini, Claude, Ollama).
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

## 🛠 Phase 3: Desktop & VST Integration

- [ ] **Epic: Seamless Workflow**
  - [ ] Develop VST3 Wrapper for in-DAW control (minimizing context switching).
  - [ ] Create advanced visualization for AI "thought process" inside the DAW.

---

> **Note:** Legacy DJ services are now managed at JasonBrain.com.

# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- (Nothing yet)

### Changed
- (Nothing yet)

### Fixed
- (Nothing yet)

### Removed
- (Nothing yet)

---

## [0.2.0] - 2025-12-07

### Changed
- **Codebase Modernization:** Refactored the monolithic `index.html` by separating all CSS into `style.css` and all JavaScript into `main.js`.
- **Style Centralization:** Removed all inline `style` attributes and replaced them with semantic and utility CSS classes.
- **Design System Alignment:** Updated the entire site's color palette to use the variables defined in `DESIGN_GUIDE.md`.

### Fixed
- **CSS Bug:** Corrected an issue where the main `h1` heading was invisible due to an incorrect CSS variable.
- **Responsive Layout:** Resolved mobile layout issues where content was overflowing or had excessive padding, particularly in the main container and contact form sections.

---

## [0.1.0] - 2025-12-07

### Added
- Initialized project structure and documentation for BrainAV.ca.
- Created `roadmap.md` to outline future development goals.
- Created `CHANGELOG.md` to track project progress.
- Created `DESIGN_GUIDE.md` for UI/UX consistency.
- Created `AI_DEV_GUIDE.md` to provide context for AI-assisted development.

# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- **Website:** Added the "Flight Deck" project to the Ecosystem showcase on the homepage.
- **Website:** Updated Flight Deck link to prototypes and clarified Visuals as an add-on.
- **Website:** Restored "Explore Framework" link to Flight Deck card.
- **Docs:** Updated `README.md` and `profile/README.md` with Flight Deck details and links.
- **Deployment:** Synced `public/index.php` with `index.html` content (Flight Deck & Visuals updates).
- **Hub:** Updated `index.html` title and heading to "BrainAV Ecosystem Hub" to distinguish it from the main site.
- **Roadmap:** Added database planning task for user accounts (Phase 1).
- **Deployment:** Completed initial cPanel deployment and DNS configuration.

## [0.2.2] - 2026-01-01

### Added
- Added Feather Icons library for modern SVG iconography.
- **Backend:** Added `public/contact.php` for PHP-based contact form handling.
- **Config:** Added `public/config.sample.php` and `.gitignore` rules for secure configuration.
- **Deployment:** Documented dual-deployment strategy (cPanel for main site, GitHub Pages for hub) in `README.md`.

### Changed
- **Web Pivot:** Refactored `index.html` to replace DJ service content with the new "AI Tech Lab" product showcase.
- **Content:** Added "The DJ Brain" and "AI Co-Producer" sections.
- **Navigation:** Updated links to point to products and external resources (GitHub, Blog).
- **Repository Structure:** Renamed `.GEMINI` to `.gemini` and centralized AI context files.
- **Website:** Moved assets to `public/` and converted `index.html` to `public/index.php`.
- **Documentation:** Centralized `DESIGN_GUIDE.md`, `CODE_OF_CONDUCT.md`, and `SECURITY.md` in the root `.github/` directory.
- **Roadmap:** Moved `roadmap.md` to root and updated Phase 0/1 goals.
- **Profile:** Updated `README.md` to distinguish between the Website repo and Product repos.

### Fixed
- **UI Bug:** Fixed `.btn-secondary` visibility issues on light backgrounds by applying brand colors.

### Removed
- **Cleanup:** Removed unused CSS classes (`.form-container`, `.contact-section`, etc.) following the removal of legacy DJ service content.
- **Legacy:** Deleted nested `.GITHUB` and `.github` folders containing deprecated files.

## [0.2.1] - 2025-12-20

### Added
- Created `prompt.md` for AI context loading and task launching.
- Created `CONTRIBUTING.md` to define workflow and tech stack.
- Added "Project Checkup" task to `prompt.md`.

### Changed
- **Strategic Pivot:** Updated `roadmap.md` to reflect transition from DJ Services to AI Tech Lab.
- Updated `AI_DEV_GUIDE.md` to align with the new product-focused mission.
- Updated `CONTRIBUTING.md` to include changelog update rules.
- Updated `README.md` and `profile/README.md` to define the BrainAV Ecosystem: "The DJ Brain" (Performance) and "AI Co-Producer" (Creation).

---

## [0.2.0] - 2025-12-07

### Changed
- **Codebase Modernization:** Refactored the monolithic `index.html` by separating all CSS into `style.css` and all JavaScript into `main.js`.
- **Style Centralization:** Removed all inline `style` attributes and replaced them with semantic and utility CSS classes.
- **Design System Alignment:** Updated the entire site's color palette to use the variables defined in `DESIGN_GUIDE.md`.
- **Business Strategy:** Removed all specific pricing from the website to encourage users to make contact for custom quotes.

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

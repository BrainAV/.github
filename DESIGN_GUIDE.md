# Design Guide

This guide is the single source of truth for the visual and interaction design of our project. Its purpose is to ensure a cohesive, accessible, and high-quality user experience.

## 1. Core Principles

- **Clarity:** The UI should be intuitive and easy to understand. Avoid ambiguity.
- **Consistency:** Components and patterns should look and behave the same way across the entire application.
- **Accessibility:** We must build for everyone. Adhere to WCAG 2.1 AA standards.

## 2. Color Palette

### Primary Colors
- `primary-blue`: `#007BFF` - Used for primary actions, links, and active states.
- `primary-dark`: `#002B55` - Used for text and dark backgrounds.

### Secondary Colors
- `secondary-gray`: `#6C757D` - Used for secondary text and borders.
- `background-light`: `#F8F9FA` - Used for page backgrounds.

### System Colors
- `success`: `#28A745`
- `warning`: `#FFC107`
- `error`: `#DC3545`

## 3. Typography

- **Font Family:** Inter, with a fallback to `sans-serif`.
- **Headings:**
  - `h1`: 32px, Bold (700)
  - `h2`: 28px, Bold (700)
  - `h3`: 24px, Semi-Bold (600)
- **Body Text:** 16px, Regular (400)

## 4. Spacing & Layout

We use an 8-point grid system. All spacing (margins, padding) should be a multiple of 8px.
- `space-1`: 8px
- `space-2`: 16px
- `space-3`: 24px

## 5. Component Library

Our components are documented in Storybook. Please refer to it for usage examples and available props.
- **Link:** https://storybook.your-project.com
- **Key Components:** Button, Input, Modal, Card, Table.


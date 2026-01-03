# Design Guide

This guide is the single source of truth for the visual and interaction design of our project. Its purpose is to ensure a cohesive, accessible, and high-quality user experience.

## 1. Core Principles

- **Clarity:** The UI should be intuitive and easy to understand. Avoid ambiguity.
- **Consistency:** Components and patterns should look and behave the same way across the entire application.
- **Accessibility:** We must build for everyone. Adhere to WCAG 2.1 AA standards.

## 2. Color Palette

Our palette is designed to be modern, accessible, and energetic, reflecting our brand's blend of technology and creativity.

### Primary Colors
- `primary-brand`: `#7E57C2` (Deep Purple) - Used for primary actions, links, and active states. Evokes creativity and technology.
- `primary-accent`: `#FFAB40` (Amber) - Used for highlights, calls-to-action, and special features.

### Secondary Colors
- `neutral-dark`: `#121212` - Used for primary text in light mode and main backgrounds in dark mode.
- `neutral-medium`: `#616161` - Used for secondary text, borders, and disabled states.
- `neutral-light`: `#F5F5F5` - Used for page backgrounds in light mode.
- `neutral-white`: `#FFFFFF` - Used for text on dark backgrounds and card backgrounds in light mode.

### System Colors
- `success`: `#28A745`
- `warning`: `#FFC107`
- `error`: `#DC3545`

### Dark Theme Palette
- `background-dark`: `neutral-dark` (`#121212`)
- `surface-dark`: `#1E1E1E` (Slightly lighter than background for cards/modals)
- `text-primary-dark`: `neutral-light` (`#F5F5F5`)
- `text-secondary-dark`: `neutral-medium` (`#616161`)

## 3. Typography

- **Font Family:** Inter, with a fallback to `sans-serif`.

### Marketing Typography (Website & Hub)
Designed for impact and readability on landing pages.
- `Display h1`: 4rem (64px), Bold (700)
- `Display h2`: 3rem (48px), Bold (700)
- `Body`: 1rem (16px) - 1.2rem (19px)

### App Typography (Dashboards & Tools)
Designed for density and utility in application interfaces.
- `h1`: 32px, Bold (700)
- `h2`: 28px, Bold (700)
- `h3`: 24px, Semi-Bold (600)
- `Body`: 16px, Regular (400)

## 4. Spacing & Layout

We use an 8-point grid system. All spacing (margins, padding) should be a multiple of 8px.
- `space-1`: 8px
- `space-2`: 16px
- `space-3`: 24px

## 5. Iconography

We use the **Feather Icons** library for its clean, modern, and lightweight design.
- **Library:** Feather Icons
- **Usage:** Use icons at a standard size of 24px. Ensure icons have sufficient contrast and a clear purpose.

## 6. Animation & Motion

- **Principle:** Motion should be purposeful, providing feedback or guiding the user's attention without being distracting.
- **Timing:** Use fast durations (150ms - 300ms) for most UI transitions.
- **Easing:** Default to `ease-in-out` for smooth acceleration and deceleration.

## 7. Component Library

Our components are documented in Storybook. Please refer to it for usage examples and available props.
- **Key Components:** Button, Input, Modal, Card, Table.
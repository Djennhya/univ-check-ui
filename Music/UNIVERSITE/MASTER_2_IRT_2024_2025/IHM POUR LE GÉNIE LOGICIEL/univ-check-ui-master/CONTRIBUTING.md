# Contribution Guide - Univ-Check UI

This document outlines the conventions and standards to follow when contributing to the Univ-Check UI project. Please adhere to these guidelines to ensure code consistency and maintainability.

## Table of Contents

- [Project Structure](#project-structure)
- [Naming Conventions](#naming-conventions)
- [Component Organization](#component-organization)
- [Architecture and Patterns](#architecture-and-patterns)
- [Styling and UI Components](#styling-and-ui-components)
- [State Management](#state-management)
- [Forms](#forms)
- [Internationalization](#internationalization)
- [Testing](#testing)
- [Commit Format](#commit-format)

## Project Structure

```
src/
├── app/                    # Next.js App Router routes and pages
│   ├── auth/               # Authentication routes (formerly (auth))
│   ├── board/              # Main application routes (formerly dashboard)
│   └── ...
├── components/             # Reusable UI components
│   ├── ui/                 # Base components (shadcn/ui only)
│   ├── enhanced/           # Enhanced shadcn components with logic
│   ├── shared/             # Custom shared components
│   │   ├── navigation/     # Navigation-related components
│   │   ├── theme/          # Theme-related components
│   │   └── others/         # Other shared components
│   └── ...
├── config/                 # Global configuration
│   ├── constants.ts        # Application constants
│   ├── messages.ts         # Error and success messages
│   ├── routes.ts           # Centralized route definitions
│   └── navigation-items.tsx # Navigation configuration
├── hooks/                  # Custom React hooks
│   ├── queries/            # TanStack Query hooks
│   └── ...
├── lib/                    # Utilities and functions
│   └── utils.ts            # Utility functions
├── schema/                 # Validation schemas (Zod)
├── server/                 # Server-side logic
│   ├── services/           # Business services
│   └── ...
└── utils/                  # Specific utilities
    ├── providers/          # React providers
    └── ...
```

## Naming Conventions

### Files and Folders

- Use `kebab-case` for folder names
  - Example: `sign-in/`, `board/`
- For component files, use dot notation with descriptive suffixes instead of hyphens
  - Example: `app.sidebar.tsx`, `feedback.dialog.tsx`, `team.switcher.tsx`
- For pages, use `page.tsx` (Next.js convention)
- For form components, use the convention: `{name}.form.tsx`
  - Example: `sign-in.form.tsx`
- For layouts, use `layout.tsx` (Next.js convention)
- For custom components, use the convention: `{name}.{component-type}.tsx`

  - Example: `contacts.table.tsx`, `user.dropdown.tsx`

- For custom hooks, prefix with `use-`
  - Example: `use-mobile.ts`
- For query hooks, organize by feature and use `.query.ts` suffix
  - Example: `use-auth.query.ts`

### Components and Classes

- Use `PascalCase` for React component names
  - Example: `SignInForm`, `ModeToggle`
- Use `PascalCase` for class names
  - Example: `AuthService`, `AuthenticationError`
- Use `camelCase` for function, method, and variable names
  - Example: `onSubmit`, `formError`

## Component Organization

### Component Directory Structure

- **src/components/ui/**: Reserved EXCLUSIVELY for native shadcn/ui components. Only minimal style overrides are allowed here, NO additional logic.
- **src/components/enhanced/**: For components that extend shadcn/ui components with additional logic or significant customizations.

  - Example: An enhanced `Button` with loading states or analytics tracking

- **src/components/shared/**: For custom, reusable components across application areas
  - **navigation/**: Navigation-related components (app.sidebar, search.form, team.switcher, user.dropdown)
  - **theme/**: Theme-related components (mode-toggle)
  - **others/**: Other shared components (feedback.dialog)
- **src/app/(feature)/components/**: For components specific to a feature or page
  - Can include subdirectories to categorize by type (e.g., `table/`, `form/`)

### Component Naming Standards

- Base shadcn/ui components: Simple name (`button.tsx`)
- Enhanced components: `{name}.enhanced.tsx` (e.g., `button.enhanced.tsx`)
- Custom components: `{name}.{component-type}.tsx` (e.g., `contacts.table.tsx`)
- Specialized components: `{name}.{specific-type}.tsx` (e.g., `professor-list.table.tsx`)

## Architecture and Patterns

### Component Structure

- **Page components**: Should only contain page structure, no business logic
- **Form components**: Should be placed in a `components` folder adjacent to the associated page
- **UI components**: Should be in the appropriate components directory based on their type
- **Navigation**: Navigation items should be defined in `src/config/navigation-items.tsx`

### Services

- Use a class-oriented approach for services
- Place services in `src/server/services/`
- Name service files: `{service-name}.service.ts`
- Services should be responsible for business logic and API calls

Example:

```typescript
// src/server/services/auth.service.ts
export class AuthService {
  static async signIn(credentials) {
    /* ... */
  }
  static async signOut() {
    /* ... */
  }
}
```

### Query Hooks

- Place TanStack Query hooks in `src/hooks/queries/{feature}.query.ts`
- Export query keys in the same file
- Prefix mutation hooks with `use` and suffix with `Mutation`

Example:

```typescript
// src/hooks/queries/auth.query.ts
export const authQueryKeys = {
  /* ... */
};
export function useSignInMutation() {
  /* ... */
}
export function useCurrentUser() {
  /* ... */
}
```

### Middleware

- Place Next.js middleware in `src/middleware.ts`
- Use middleware for route protection, redirects, and request/response modifications

## Styling and UI Components

- Use Tailwind CSS for styling
- Use shadcn/ui components as the foundation for the user interface
- Prefer Tailwind classes integrated into components rather than separate CSS files
- For complex variations, use `cva` (class-variance-authority)
- When extending shadcn components with styling only, you can create a variant in the same file
- When adding logic, create an enhanced version in `src/components/enhanced/`
- Use React icons and Remixicon for icons - import from `@remixicon/react`

## State Management

- Use TanStack Query for server-related state management
- Use TanStack Table for table-related state
- Use React hooks (`useState`, `useReducer`) for local state
- Avoid global state managers (Redux, Zustand) unless absolutely necessary
- Use React contexts for state shared across multiple components

## Forms

- Use `react-hook-form` for all forms
- Use `zod` for schema validation
- Place validation schemas in `src/schema/{form-name}.schema.ts`
- Use shadcn/ui `Form` components

Example:

```typescript
const form = useForm<InputType>({
  resolver: zodResolver(validationSchema),
  defaultValues: {
    /* ... */
  },
});
```

## Internationalization

- Centralize all messages in `src/config/messages.ts`
- Structure messages by feature
- Use descriptive keys

## Testing

- Place tests next to the tested file with the extension `.test.ts(x)`
- Use Vitest for unit tests
- Use Playwright for e2e tests
- Ensure each component and service has appropriate tests

## Commit Format

Follow the conventional commit convention:

```
<type>(<scope>): <description>

[optional body]

[optional footer]
```

Common types:

- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation changes
- `style`: Style changes (no code change)
- `refactor`: Code refactoring
- `test`: Adding or modifying tests
- `chore`: Maintenance tasks

Example:

```
feat(auth): add sign-in page

- Add sign-in form
- Integrate with authentication service
- Add unit tests
```

---

This guide is evolving and will be updated as the project progresses. Contributors are encouraged to propose improvements to these conventions.

# Univ-Check UI

A modern attendance management system for universities that helps administrators track professor attendance and efficiently organize teaching sessions.

![Univ-Check UI Screenshot](https://originui.com/_next/image?url=%2Flayouts%2Fapp-1.png&w=1200&q=75)
_This image represents the minimalist and modern design style we're aiming for with Univ-Check 😭🚀._

## Overview

Univ-Check UI is an open-source project aimed at providing universities with a robust system to manage and track professor attendance. The system enables university administrators to:

- Monitor professor attendance and punctuality
- Organize and schedule courses efficiently
- Generate attendance reports and analytics
- Manage manual attendance validation

## Technologies

- **Framework**: [Next.js 15](https://nextjs.org/)
- **UI Components**:
  - [shadcn/ui](https://ui.shadcn.com/)
  - [Origin UI](https://originui.com/) - Beautiful UI components built with Tailwind CSS and React
  - [React Icons](https://react-icons.github.io/react-icons/icons?name=pi) - Using Phosphor Icons (pi) in dualtone style
- **Styling**: [Tailwind CSS 4](https://tailwindcss.com/)
- **Form Management**: [React Hook Form](https://react-hook-form.com/)
- **Validation**: [Zod](https://github.com/colinhacks/zod)
- **State Management**:
  - [TanStack Query](https://tanstack.com/query) - Server state
  - [TanStack Table](https://tanstack.com/table) - Table state management
  - [Zustand](https://github.com/pmndrs/zustand) - Client state
- **URL State Management**: [Nuqs](https://nuqs.47ng.com/) - Type-safe URL query state management
- **Authentication**: [Better Auth](http://better-auth.com/) - Authentication framework

## Getting Started

### Prerequisites

- Node.js 18.x or higher
- pnpm 8.x or higher

### Installation

1. Clone the repository:

```bash
git clone https://github.com/tiger-githubb/univ-check-ui.git
cd univ-check-ui
```

2. Install dependencies:

```bash
pnpm install
```

3. Run the development server:

```bash
pnpm dev
```

4. Open [http://localhost:3007](http://localhost:3007) with your browser to see the application.

## Project Structure

The project follows a structured organization to maintain scalability and separation of concerns:

```
src/
├── app/                    # Next.js App Router routes and pages
│   ├── auth/               # Authentication routes
│   ├── board/              # Main application routes (formerly dashboard)
│   └── ...
├── components/             # Reusable UI components
│   ├── ui/                 # Base components (shadcn/ui only)
│   ├── enhanced/           # Enhanced shadcn components with logic
│   ├── shared/             # Custom shared components
│   │   ├── navigation/     # Navigation-related components (app.sidebar, search.form, team.switcher)
│   │   ├── theme/          # Theme-related components (mode-toggle)
│   │   └── others/         # Other shared components (feedback.dialog)
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

See [CONTRIBUTING.md](./CONTRIBUTING.md) for detailed information about the project structure and conventions.

## Authentication Demo

For testing purposes, you can use the following credentials:

- **Admin:**

  - Email: admin@univ-check.fr
  - Password: Admin123!

- **Professor:**
  - Email: professeur@univ-check.fr
  - Password: Prof123!

## Contributing

We welcome contributions to the Univ-Check UI project! Please read our [Contributing Guide](./CONTRIBUTING.md) to get started. The guide includes detailed information about:

- Project structure and conventions
- Component organization
- Development workflow
- Code style guidelines

## Development Roadmap

- [x] Configuration and architecture
- [ ] Integration with the backend API
- [ ] Authentication system
- [ ] Dashboard for administrators
- [ ] Professor management
- [ ] Course scheduling
- [ ] Attendance tracking and reporting
- [ ] Mobile-responsive design
- [ ] Real-time notifications
- [ ] User feedback and bug reporting

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- [Next.js](https://nextjs.org/)
- [shadcn/ui](https://ui.shadcn.com/)
- [Origin UI](https://originui.com/)
- [Tailwind CSS](https://tailwindcss.com/)
- [TanStack Query](https://tanstack.com/query)
- [TanStack Table](https://tanstack.com/table)
- [Zustand](https://github.com/pmndrs/zustand)
- [Better Auth](http://better-auth.com/)

![Project analytics and stats](https://repobeats.axiom.co/api/embed/7ef65e62ef6cb949b5d3f242c4b2a58af1df6ba1.svg "Repobeats analytics image")

_All our contributors and supporters are welcome to join us and help us make Univ-Check the best attendance tracking system out there!_

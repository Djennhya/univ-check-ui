import { ModeToggle } from "@/components/shared/theme/mode-toggle";
import { SignInForm } from "./components/sign-in.form";

export default function SignInPage() {
  return (
    <div className="flex min-h-screen items-center justify-center p-4 bg-background">
      <div className="absolute top-4 right-4">
        <ModeToggle />
      </div>

      <SignInForm />
    </div>
  );
}

import { messages } from "@/config/messages";
import { z } from "zod";

export const signInSchema = z.object({
  email: z.string().min(1, { message: messages.auth.email.required }).email({ message: messages.auth.email.invalid }),

  password: z
    .string()
    .min(1, { message: messages.auth.password.required })
    .min(8, { message: messages.auth.password.tooShort })
    .max(50, { message: messages.auth.password.tooLong })
    .regex(/[a-z]/, { message: messages.auth.password.noLowercase })
    .regex(/[A-Z]/, { message: messages.auth.password.noUppercase })
    .regex(/[0-9]/, { message: messages.auth.password.noNumber }),
});

export type SignInInput = z.infer<typeof signInSchema>;

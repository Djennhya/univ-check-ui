import { SignInInput } from "@/schema/sign-in.schema";
import { AuthService } from "@/server/services/auth.service";
import { useMutation, useQuery, useQueryClient } from "@tanstack/react-query";
import { useEffect, useState } from "react";

export const authQueryKeys = {
  user: ["currentUser"],
  session: ["session"],
};

export function useSignInMutation() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (credentials: SignInInput) => AuthService.signIn(credentials),
    onSuccess: (data) => {
      localStorage.setItem("auth-token", data.token);

      queryClient.setQueryData(authQueryKeys.user, data.user);
      queryClient.invalidateQueries({ queryKey: authQueryKeys.user });
    },
  });
}

export function useSignOutMutation() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: () => AuthService.signOut(),
    onSuccess: () => {
      localStorage.removeItem("auth-token");

      queryClient.setQueryData(authQueryKeys.user, null);
      queryClient.invalidateQueries({ queryKey: authQueryKeys.user });
    },
  });
}

export function useCurrentUser() {
  const [token, setToken] = useState<string | null>(null);

  useEffect(() => {
    setToken(localStorage.getItem("auth-token"));
  }, []);

  return useQuery({
    queryKey: authQueryKeys.user,
    queryFn: () => (token ? AuthService.getCurrentUser(token) : null),
    enabled: !!token,
    staleTime: 1000 * 60 * 5,
  });
}

import { NextRequest, NextResponse } from "next/server";
import { routes } from "./config/routes";

export function middleware(request: NextRequest) {
  const path = request.nextUrl.pathname;

  if (path === "/") {
    return NextResponse.redirect(new URL(`/${routes.auth.signIn}`, request.url));
  }

  return NextResponse.next();
}

export const config = {
  matcher: ["/"],
};

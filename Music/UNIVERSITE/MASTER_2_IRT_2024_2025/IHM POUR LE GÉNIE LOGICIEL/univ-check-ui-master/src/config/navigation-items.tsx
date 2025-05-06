import { IconType } from "react-icons";
import { PiGearDuotone, PiHouseDuotone, PiUserDuotone } from "react-icons/pi";
import { routes } from "./routes";

// Types definitions
export interface TeamData {
  name: string;
  logo: string;
}

export interface NavMenuItem {
  title: string;
  url: string;
  icon?: IconType;
  isActive?: boolean;
}

export interface NavMenuGroup {
  title: string;
  url: string;
  items: NavMenuItem[];
}

export const teamsData: TeamData[] = [
  {
    name: "Esgis Avedji",
    logo: "https://ui-avatars.com/api/?name=Esgis+Avedji&background=random",
  },
  {
    name: "Esgis Adjidogomé",
    logo: "https://ui-avatars.com/api/?name=Esgis+Adjidogome&background=random",
  },
  {
    name: "Esgis Kodjoviakopé",
    logo: "https://ui-avatars.com/api/?name=Esgis+Kodjoviakope&background=random",
  },
];

export const mainSections: NavMenuGroup[] = [
  {
    title: "Main",
    url: "#",
    items: [
      {
        title: "Board",
        url: routes.board.home,
        icon: PiHouseDuotone,
      },

      {
        title: "Utilisateurs",
        url: routes.board.users,
        icon: PiUserDuotone,
      },
    ],
  },
];

export const otherSections: NavMenuGroup[] = [
  {
    title: "Autres",
    url: "#",
    items: [
      {
        title: "Paramètres",
        url: routes.board.settings,
        icon: PiGearDuotone,
      },
      {
        title: "Profil",
        url: routes.board.profile,
        icon: PiUserDuotone,
      },
    ],
  },
];

export const navigationData = {
  teams: teamsData,
  navMain: [...mainSections, ...otherSections],
};

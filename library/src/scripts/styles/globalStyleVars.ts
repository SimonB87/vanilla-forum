/**
 * @copyright 2009-2019 Vanilla Forums Inc.
 * @license GPL-2.0-only
 */

import { modifyColorBasedOnLightness, colorOut, IBackground, emphasizeLightness } from "@library/styles/styleHelpers";
import { useThemeCache, variableFactory } from "@library/styles/styleUtils";
import { color, ColorHelper, percent, viewHeight } from "csx";

export const globalVariables = useThemeCache(() => {
    let colorPrimary = color("#0291db");
    const makeThemeVars = variableFactory("global");

    const utility = {
        "percentage.third": percent(100 / 3),
        "percentage.nineSixteenths": percent((9 / 16) * 100),
        "svg.encoding": "data:image/svg+xml,",
    };

    const elementaryColors = {
        black: color("#000"),
        grey: color("#555a62"),
        white: color("#fff"),
        transparent: `transparent`,
    };

    const initialMainColors = makeThemeVars("mainColors", {
        fg: color("#555a62"),
        bg: color("#fff"),
        primary: colorPrimary,
        secondary: colorPrimary,
    });

    colorPrimary = initialMainColors.primary;

    const generatedMainColors = makeThemeVars("mainColors", {
        secondary: emphasizeLightness(colorPrimary, 0.05),
    });

    const mainColors = {
        ...initialMainColors,
        ...generatedMainColors,
    };

    const mixBgAndFg = (weight: number) => {
        return mainColors.fg.mix(mainColors.bg, weight) as ColorHelper;
    };

    const mixPrimaryAndFg = (weight: number) => {
        return mainColors.primary.mix(mainColors.fg, weight) as ColorHelper;
    };

    const mixPrimaryAndBg = (weight: number) => {
        return mainColors.primary.mix(mainColors.bg, weight) as ColorHelper;
    };

    const feedbackColors = makeThemeVars("feedbackColors", {
        warning: {
            fg: color("#4b5057"),
            bg: color("#fff1ce"),
            state: color("#e55a1c"),
        },
        error: {
            fg: color("#d0021b"),
            bg: color("#FFF3D4"),
        },
        confirm: color("#60bd68"),
        deleted: {
            fg: color("#D0021B"),
            bg: color("#D0021B"),
        },
    });

    const links = makeThemeVars("links", {
        colors: {
            default: mainColors.primary,
            hover: mainColors.secondary,
            focus: mainColors.secondary,
            accessibleFocus: mainColors.secondary,
            active: mainColors.secondary,
            visited: undefined,
        },
    });

    interface IBody {
        backgroundImage: IBackground;
    }

    const body: IBody = makeThemeVars("body", {
        backgroundImage: {
            color: mainColors.bg,
        },
    });

    const border = makeThemeVars("border", {
        color: mixBgAndFg(0.15),
        width: 1,
        style: "solid",
        radius: 6,
    });

    const gutterSize = 24;
    const gutter = makeThemeVars("gutter", {
        size: gutterSize,
        half: gutterSize / 2,
        quarter: gutterSize / 4,
    });

    const lineHeights = makeThemeVars("lineHeight", {
        base: 1.5,
        condensed: 1.25,
        code: 1.45,
        excerpt: 1.45,
        meta: 1.5,
    });

    const panelWidth = 216;
    const panel = makeThemeVars("panelWidth", {
        width: panelWidth,
        paddedWidth: panelWidth + gutter.size * 2,
    });

    const middleColumnWidth = 672;
    const middleColumn = makeThemeVars("middleColumn", {
        width: middleColumnWidth,
        paddedWidth: middleColumnWidth + gutter.size * 2,
    });

    const content = makeThemeVars("content", {
        width: middleColumn.paddedWidth + panel.paddedWidth * 2 + gutter.size * 2,
    });

    const fonts = makeThemeVars("fonts", {
        size: {
            large: 16,
            medium: 14,
            small: 12,
            title: 32,
            smallTitle: 22,
            subTitle: 18,
        },

        mobile: {
            size: {
                title: 26,
            },
        },
        weights: {
            normal: 400,
            semiBold: 600,
            bold: 700,
        },

        families: {
            body: ["Open Sans"],
        },
        alignment: {
            headings: {
                capitalLetterRatio: 0.715, // Calibrated for Open Sans
                verticalOffset: 1, // Calibrated for Open Sans
                horizontal: -0.03, // Calibrated for Open Sans
                verticalOffsetForAdjacentElements: "-.13em", // Calibrated for Open Sans
            },
        },
    });

    const icon = makeThemeVars("icon", {
        sizes: {
            large: 32,
            default: 24,
            small: 16,
            xSmall: 9.5,
        },
        color: mixBgAndFg(0.18),
    });

    const spacer = makeThemeVars("spacer", {
        size: fonts.size.medium * lineHeights.base,
    });

    const animation = makeThemeVars("animation", {
        defaultTiming: ".15s",
        defaultEasing: "ease-out",
    });

    const embed = makeThemeVars("embed", {
        error: {
            bg: feedbackColors.error,
        },
        focus: {
            color: mainColors.primary,
        },
        text: {
            padding: fonts.size.medium,
        },
        sizing: {
            smallPadding: 4,
            width: 640,
        },
        select: {
            borderWidth: 2,
        },
        overlay: {
            hover: {
                color: mainColors.bg.fade(0.5),
            },
        },
    });

    const meta = makeThemeVars("meta", {
        text: {
            fontSize: fonts.size.small,
            color: mixBgAndFg(0.85),
            margin: 4,
        },
        spacing: {
            verticalMargin: 12,
            default: gutter.quarter,
        },
        lineHeights: {
            default: lineHeights.base,
        },
        colors: {
            fg: mixBgAndFg(0.85),
        },
    });

    const states = makeThemeVars("states", {
        icon: {
            opacity: 0.6,
        },
        text: {
            opacity: 0.75,
        },
        hover: {
            color: mixPrimaryAndBg(0.08),
            opacity: 1,
        },
        selected: {
            color: mixPrimaryAndBg(0.5),
            opacity: 1,
        },
        active: {
            color: mixPrimaryAndBg(0.2),
            opacity: 1,
        },
        focus: {
            color: mixPrimaryAndBg(0.15),
            opacity: 1,
        },
    });

    const overlayBg = modifyColorBasedOnLightness(mainColors.fg, 0.5);
    const overlay = makeThemeVars("overlay", {
        dropShadow: `2px -2px 5px ${colorOut(overlayBg.fade(0.3))}`,
        bg: overlayBg,
        border: {
            color: mixBgAndFg(0.1),
            radius: border.radius,
        },
        fullPageHeadingSpacer: 32,
        spacer: 32,
    });

    const userContent = makeThemeVars("userContent", {
        font: {
            sizes: {
                default: fonts.size.medium,
                h1: "2em",
                h2: "1.5em",
                h3: "1.25em",
                h4: "1em",
                h5: ".875em",
                h6: ".85em",
            },
        },
        list: {
            margin: "2em",
            listDecoration: {
                minWidth: "2em",
            },
        },
    });

    const buttonIconSize = 36;
    const buttonIcon = makeThemeVars("buttonIcon", {
        size: buttonIconSize,
        offset: (buttonIconSize - icon.sizes.default) / 2,
    });

    const separator = makeThemeVars("separator", {
        color: border.color,
        size: 1,
    });

    // https://medium.com/@clagnut/all-you-need-to-know-about-hyphenation-in-css-2baee2d89179
    // Requires language set on <html> tag
    const userContentHyphenation = makeThemeVars("userContentHyphenation", {
        minimumCharactersToHyphenate: 6,
        minimumCharactersBeforeBreak: 3,
        minimumCharactersAfterBreak: 3,
        maximumConsecutiveBrokenLines: 2,
        avoidLastWordToBeBroken: true,
        hyphenationZone: "6em",
    });

    return {
        utility,
        elementaryColors,
        mainColors,
        feedbackColors,
        body,
        border,
        meta,
        gutter,
        panel,
        content,
        fonts,
        spacer,
        lineHeights,
        icon,
        buttonIcon,
        animation,
        links,
        embed,
        states,
        overlay,
        userContent,
        mixBgAndFg,
        mixPrimaryAndFg,
        mixPrimaryAndBg,
        separator,
        userContentHyphenation,
    };
});

export enum IIconSizes {
    SMALL = "small",
    DEFAULT = "default",
    LARGE = "large",
}

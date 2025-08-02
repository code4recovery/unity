# Unity

A WordPress theme for A.A. service entities.

## Design principles

1. Accessibility

- High color contrast
- Large text
- No device requirements

2. Usability

- Minimize floating elements
- Mobile-first
- Economize screen area

3. Maintainability

- Minimize markup
- Minimize custom code
- Minimize third-party plugins
- Use Tailwind rather than custom CSS

## Developing

```
npm i && npm run dev
```

## Before committing changes

```
npm run build && wp i18n make-pot . ./i18n/unity.pot
```

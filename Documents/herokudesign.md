# Heroku by Salesforce — Design visual, explicat în detaliu

Document de referință despre **cum arată** Heroku: brand-ul public, site-ul de marketing (`heroku.com`) și produsul (Dashboard-ul de pe `dashboard.heroku.com`). Sinteză din ghidurile oficiale Heroku, design system-ul intern (Purple3 / Shibori3 / Malibu) și CSS-ul real al produsului.

Surse principale: [Heroku Brand Guidelines](https://devcenter.heroku.com/articles/heroku-brand-guidelines) (actualizat 10 septembrie 2025), [Heroku Design](https://design.herokai.com/), [Purple3 docs](https://design.herokai.com/purple3/docs), CSS-ul live `purple3.min.css`, [The Heroku Dashboard](https://devcenter.heroku.com/articles/heroku-dashboard).

---

## 1. Două fețe vizuale, un singur brand

Heroku este o companie Salesforce, dar rămâne un **produs și un brand independent**. Design-ul nu e o singură pagină violet. Există două straturi care arată foarte diferit:

| Strat | Unde îl vezi | Scop vizual | Sistem |
| --- | --- | --- | --- |
| **Brand / marketing** | `heroku.com`, ads, print, keynotes | Dramatic, premium, „cloud magic”: violet profund, gradiente, headlines geometrice | **Shibori3** + Brand Guidelines |
| **Produs (Dashboard)** | `dashboard.heroku.com` | Consolă de developer: deschis, dens, conținut peste chrome, violet doar ca accent | **Purple3** + **Malibu** |

Filozofia produsului, anunțată odată cu redesign-ul Dashboard-ului (Ember.js, 2014): *„a lighter interface that favors content over chrome”* — interfață mai deschisă, prietenoasă, care pune datele și acțiunile în față, nu ramele decorative.

Heroku **nu** arată ca un admin clasic cu sidebar stânga negru. Chrome-ul principal e o **bară de sus** + **breadcrumb / context switcher**, iar pagina e aproape albă, cu tabele, tab-uri și carduri subțiri.

---

## 2. Logo-ul — cum arată efectiv

Logo-ul actual datează din **2015**. Are trei piese:

1. **Mark-ul** — un **H stilizat**, geometric: două forme rotunjite care se întâlnesc și formează litera H. Nu e un H tipografic obișnuit. E folosit ca avatar (social, Salesforce product dial) **doar** când brand-ul Heroku/Salesforce e deja evident.
2. **Wordmark-ul** — `HEROKU` cu majuscule, tracking strâns, sans-serif geometric. Stă la dreapta mark-ului în varianta orizontală.
3. **Salesforce lockup** — pe materialele de brand recente, lockup-ul Salesforce stă lângă / sub logo. Nu se mută, nu se scalează separat, nu se recolorează.

Variante oficiale:

- **Primary horizontal** — prima alegere, oricând încape.
- **Secondary vertical** — doar când lățimea minimă a variantei orizontale nu e respectată.
- **Mark-only** — spații foarte mici sau contexte deja „Heroku”.

**Clear space:** distanța ideală în jurul logo-ului este egală cu lățimea mark-ului, pe toate laturile.

Ce nu se face: rotire / skew, overlay, schimbarea culorii mark-ului, fundaluri care înghit logo-ul, mutarea lockup-ului Salesforce.

Culoare istorică asociată logo-ului (variante mai vechi, încă vizibile pe asset-uri terțe): `#430098`. Paleta de brand Salesforce-era a mutat violetul principal la **Purple 30 `#5A1BA9`**. În Dashboard, violetul de produs (link-uri, tab activ, buton outline) e încă **`#79589F`** — nuanța clasică „Heroku purple” pe care o recunoști imediat în UI.

---

## 3. Paleta de brand (marketing / Salesforce era)

Ghidul oficial spune că paleta merge de la cald la rece, vibrant la profund, „reflecting the rich environments where our developers work their magic”. Digital și print sunt ** palete separate** — nu se amestecă HEX cu CMYK/PMS.

### Culori primare digitale

| Nume | Treaptă | HEX | RGB | Rol vizual |
| --- | --- | --- | --- | --- |
| Heroku Purple | Purple 30 | `#5A1BA9` | 90, 27, 169 | Violetul de brand. Logo, butoane marketing, accent principal. |
| Dark Purple | Purple 15 | `#300B60` | 48, 11, 96 | Fundaluri profunde, capătul întunecat al gradientului. |
| Light Purple | Purple 80 | `#D7BFF2` | 215, 191, 242 | Highlight, glow, fundaluri lavandă. |
| Salesforce Blue | — | `#0176D3` | 1, 118, 211 | Semnalul că Heroku e în familia Salesforce. Link-uri / CTA-uri „corporate”. |

### Scara completă Purple (digital)

De la aproape alb lavandă până la violet noapte:

| Treaptă | HEX | Impresie |
| --- | --- | --- |
| Purple 95 | `#F6F2FB` | Lavandă foarte deschisă, aproape hârtie. |
| Purple 90 | `#ECE1F9` | Fundal de secțiune, hover subtil. |
| Purple 80 | `#D7BFF2` | Light purple de brand. |
| Purple 70 | `#C29EF1` | Accent luminos. |
| Purple 65 | `#B78DEF` | |
| Purple 60 | `#AD7BEE` | |
| Purple 50 | `#9050E9` | Violet saturat, „electric”. |
| Purple 40 | `#7526E3` | |
| Purple 30 | `#5A1BA9` | **Primar.** |
| Purple 20 | `#401075` | |
| Purple 15 | `#300B60` | **Dark purple.** |
| Purple 10 | `#240643` | Cel mai închis — aproape negru-violet. |

### Scara Cloud Blue (digital)

Complementul rece al violetului. Folosit pe marketing pentru contrast, diagrame, „cloud / data”, nu ca culoare dominantă.

| Treaptă | HEX |
| --- | --- |
| Cloud Blue 95 | `#EAF5FE` |
| Cloud Blue 90 | `#CFE9FE` |
| Cloud Blue 80 | `#90D0FE` |
| Cloud Blue 70 | `#1AB9FF` |
| Cloud Blue 65 | `#08ABED` |
| Cloud Blue 60 | `#0D9DDA` |
| Cloud Blue 50 | `#107CAD` |
| Cloud Blue 40 | `#05628A` |
| Cloud Blue 30 | `#084968` |
| Cloud Blue 20 | `#023248` |
| Cloud Blue 15 | `#0A2636` |
| Cloud Blue 10 | `#001A28` |

Alb-ul există în paletă ca **White 100**, deși nu are o „culoare proprie” în scară.

**Regulă de contrast (brand):** la împerecherea a două trepte, valorile numerice trebuie să fie la **minimum 50 de puncte distanță** (ex. Purple 30 pe Purple 80, nu Purple 30 pe Purple 50) ca să treacă AA+.

### Gradiente de brand (marketing)

Fundalul recomandat: **linear gradient 100% Purple 15 → 100% Purple 30** (`#300B60` → `#5A1BA9`). Direcția poate fi orizontală, verticală sau oblică.

Peste el, opțional, un **glow radial** de la 50% opacitate la 0%, ca să „aprinzi” un element (CTA, screenshot, titlu).

Reguli:

- gradientul e **fundal subtil**, nu decor zgomotos;
- **două culori** per compoziție;
- fără gradient circular ca fundal;
- **fără gradient pe text**;
- fără salturi dure de culoare.

Asta e atmosfera pe care o vezi pe `heroku.com`: un câmp violet profund, uneori cu o pată de lumină, peste care stau headlines albe și UI-ul alb al produsului ca screenshot.

---

## 4. Paleta de produs (Dashboard / Purple3)

Dashboard-ul **nu** folosește scara Salesforce Purple 10–95 ca UI de zi cu zi. Folosește paleta **Purple3**, calibrată pentru o consolă deschisă, lizibilă, cu violet ca accent — nu ca fundal.

Culori extrase din CSS-ul live `https://www.herokucdn.com/purple3/latest/purple3.min.css`:

### Violet de produs (semnătura Dashboard-ului)

| Token | HEX | Unde îl vezi |
| --- | --- | --- |
| `purple` | `#79589F` | Link-uri, tab activ, buton secondary/tertiary, icon fill. **Asta e „culoarea Heroku” în app.** |
| `dark-purple` | `#4F3074` | Hover / text mai greu pe violet. |
| `light-purple` | `#A997BF` | Border-ul tab-ului activ, outline-uri moi. |
| `lightest-purple` | `#F7F3FB` | Fundal hover lavandă foarte pal. |

Gradientul butonului primar în produs **nu** e Purple 15→30. E un violet mai deschis, 135°:

```css
.bg-gradient-primary { background: linear-gradient(135deg, #8964B4, #6A4791); }
.bg-gradient-secondary { background: linear-gradient(135deg, #8964B4, #43ACCD); }
```

Primary = violet → violet mai închis. Secondary = violet → cyan (`#43ACCD`) — o notă „cloud”, nu Salesforce Blue.

### Griuri (suprafața reală a Dashboard-ului)

Aici trăiește 90% din UI. Paleta e **albastru-gri rece**, nu gri neutru. După auditul de accesibilitate 2018–2019, griurile au fost întunecate ca să treacă WCAG AA.

| Token | HEX | Rol |
| --- | --- | --- |
| `near-black` | `#323B49` | Text principal aproape-negru, dar albastru-slate. |
| `dark-gray` | `#475366` | Titluri secundare, copy dens. |
| `mid-gray` | `#56667D` | |
| `gray` | `#62738D` | Text de tab inactiv, badge default, meta. |
| `light-gray` | `#CFD7E6` | Border de input, divider. |
| `silver` | `#E3E7EF` | Linia de sub tab-uri, border de chrome. |
| `light-silver` | `#EEF1F6` | Fundal de rând / hover de listă. |
| `lightest-silver` | `#F7F8FB` | Fundal de pagină / well foarte pal. |
| `near-white` | `#FBFBFD` | Cel mai deschis strat. |
| `white` | `#FFFFFF` | Carduri, inputs, chrome de top. |

Impresie: Dashboard-ul arată ca **hârtie albă-rece**, nu ca un theme dark și nu ca un marketing purple. Violetul apare punctual.

### Semantice (status, acțiuni)

| Token | HEX | Folosire |
| --- | --- | --- |
| `blue` | `#006DEB` | Info, badge Beta, link „Learn more”, banner info. |
| `dark-blue` | `#034CA2` | |
| `green` | `#008700` | Success, dyno on, toast OK. |
| `red` | `#DE0A0A` | Danger, delete, error toast. |
| `orange` | `#C74C00` | Warning, badge Alpha. |
| `gold` | `#FFB700` | Accent rar (favorite / star). |

---

## 5. Tipografie

### Brand (heroku.com, print, ads)

Două familii, ierarhie strictă:

- **ITC Avant Garde** (Salesforce / Demi) — headlines. Geometric sans, cercuri în O/C/G, personalitate „friendly classic”. Nu e font de UI dens.
- **Salesforce Sans Regular** — body, captions, text lung.

Nu se pun două mărimi prea apropiate una lângă alta. Headline-ul trebuie să se simtă net diferit de body.

### Produs (Dashboard / Purple3)

UI-ul **nu** folosește Avant Garde. E prea display pentru o consolă.

Stack-ul default din Purple3:

```text
Salesforce Sans, -apple-system, BlinkMacSystemFont, avenir next, avenir,
helvetica, helvetica neue, ubuntu, roboto, noto, segoe ui, arial, sans-serif
```

Cod / SHA / config vars:

```text
consolas, monaco, monospace
```

Scala de tip e **mică și densă** — arată ca un tool, nu ca un landing:

| Clasă | Mărime | Rol tipic |
| --- | --- | --- |
| `.f1` | 22px | Titlul de pagină (numele app-ului). Atât. Nu hero. |
| `.f2` | 17px | Titlu de secțiune. |
| `.f3` | 15px | Subtitlu. |
| `.f4` | 14px | Tab-uri. |
| `.f5` | 13px | **Body UI, butoane, input-uri.** Asta e vocea Dashboard-ului. |
| `.f6` | 12px | Badge, meta, helper. |
| `.f7` | 11px | Microcopy, badge square. |

Butoanele primary au **13px / line-height 22px / height 32px / font-weight 600**, cu antialiasing forțat. Small buttons: **12px / 26px height**.

Lungimea liniei (Tachyons measure): ~45 / ~66 / ~80 caractere. Empty states (`.hk-well`) centrează un titlu `.f4` și un paragraf `.f5` îngust.

---

## 6. Cum arată site-ul de marketing (`heroku.com`)

Atmosferă: **violet profund + alb + geometrie**.

- **Hero:** fundal gradient Purple 15 → Purple 30, uneori cu glow radial. Headline mare, alb, Avant Garde. Subtitlu Salesforce Sans, alb / lavandă. CTA-uri: buton plin alb sau violet-deschis, plus un ghost button.
- **Logo** sus stânga, alb pe violet (sau violet pe alb în header-ul scrolled). Lockup „A Salesforce Company”.
- **Navigație** de marketing: orizontală, aerisită, nu densă ca Dashboard-ul. Items gen Products, Pricing, Docs, Login, Sign up.
- **Secțiuni următoare:** alternează **violet închis** cu **alb**. Pe alb, copy-ul e near-black, accentele sunt Purple 30 și Cloud Blue. Carduri cu colțuri ușor rotunjite, umbre foarte moi, screenshot-uri de produs încadrate ca „fereastră”.
- **Ilustrație:** forme abstracte, glow, uneori 3D soft / glass — nu ilustrație cartoon, nu stock photos. Violetul e personajul.
- **Footer:** tot violet închis sau near-black, link-uri albe/lavandă, mențiune Salesforce.

Nu e un site „startup pastel”. E **enterprise-cloud dramatic**, dar cu voce de developer (copy scurt, `git push heroku main` ca artifact vizual).

Shibori3 e CSS-ul atomic pentru aceste pagini — același spirit Tachyons ca Purple3, dar cu tokeni de marketing (spații mai mari, type mai mare, gradiente de brand).

---

## 7. Cum arată Dashboard-ul (produsul)

Asta e imaginea pe care o ai în cap când spui „UI-ul Heroku”.

### 7.1 Scheletul paginii

```
┌──────────────────────────────────────────────────────────────────┐
│  [H]  Heroku     [ Quick Jump 🔎 ]     (bell)  (avatar rotund)   │  ← top bar albă, joasă
├──────────────────────────────────────────────────────────────────┤
│  Personal ▾  /  my-app  /  Resources                             │  ← breadcrumb + context
├──────────────────────────────────────────────────────────────────┤
│  Resources   Metrics   Activity   Access   Settings              │  ← tab-uri orizontale
├──────────────────────────────────────────────────────────────────┤
│                                                                  │
│   conținut: listă / tabel / metrici / form                       │  ← fundal almost-white
│                                                                  │
└──────────────────────────────────────────────────────────────────┘
```

Nu există sidebar persistent stânga. Navigația e **top + tabs + breadcrumb**. În 2019 au simplificat nav-ul la un **breadcrumb-style layout**: poți sări între teams, pipelines și apps de oriunde.

### 7.2 Top bar

- Fundal **alb**, border jos 1px `#E3E7EF` (silver).
- Stânga: mark-ul H violet (sau logo compact).
- Centru/stânga-centru: **Quick Jump** — un search box pe toată lățimea utilă, placeholder de tip „Jump to app, pipeline, space, or team…”. E unul dintre cele mai recunoscute elemente Heroku: navigare prin paletă, nu prin meniuri adânci.
- Dreapta: notificări + **avatar circular** (identicon sau poză). Click pe avatar = User Menu (account, notifications, logout).

Înălțimea e mică. Nu e un header marketing. E o bară de tool.

### 7.3 Lista de aplicații (home)

Pagina default: lista app-urilor și pipeline-urilor contului personal.

Fiecare rând arată:

- numele app-ului (link violet `#79589F`);
- stack / buildpack / region ca meta gri `#62738D`;
- uneori un star (favorite) — favoritele urcă în capul listei;
- dacă are Metrics, un sparkline mic lângă nume.

Deasupra listei: **context switcher** (Personal vs. un Team) și search/filter (nume, stack, buildpack).

Densitate mare, whitespace controlat, hover pe rând cu `light-silver`. Nu carduri uriașe cu shadow-5.

### 7.4 Pagina unei aplicații

Header de pagină: numele app-ului la ~22px, apoi o linie de meta (region, pipeline, GitHub repo).

**Tab-uri orizontale** (componenta `.hk-tabs`):

- Resources, Metrics, Activity, Access, Settings (+ altele după context: Deploy, etc.).
- Tab inactiv: text `#62738D`, padding 15px, font 14px, border-bottom silver.
- Tab activ: text **`#79589F`**, underline **`#A997BF`**.
- O linie continuă silver leagă tab-urile de conținut.

Dreapta sus pe pagina de app: meniul **More** (logs recente, console web).

### 7.5 Resources

Aici „arată a Heroku”:

- **Dynos** — un tabel compact: process type (`web`, `worker`), size (Standard-1X…), count, un control de scale. View-first: te uiți întâi, treci în edit ca să scalezi (protecție împotriva schimbărilor accidentale).
- **Add-ons** — listă cu icoane Malibu, plan, attachment name.
- Totul pe alb, dividere 1px, butoane small 26px pentru acțiuni secundare, primary 32px pentru „Create / Add”.

### 7.6 Metrics

Grafice pe axă de timp comună: throughput (RPM pe status code), response time (median + p95), errors, memory, CPU load. Paletă de chart: albastru / verde / roșu semantice, grid silver, fundal alb. Nu e un theme „observability dark”. E același look deschis ca restul Dashboard-ului.

### 7.7 Empty states

Componenta `.hk-well`: cutie centrată, padding 20px, radius 6px, fundal `rgba(87,114,154,.05)`, umbră inner foarte subtilă, text `#475366`. Titlu + două rânduri + un link albastru. Arată a „nimic aici, dar e calm”, nu a illustration splash.

---

## 8. Componente — cum arată piesele

Toate prefixate `hk-` în Purple3. Colțurile sunt **4px** pe controale (buton, input, tab active feel), **6px** pe carduri/wells, **8px** rar, **13px** foarte rar, **pill 9999px** pe badge-uri.

### Butoane

Înălțime 32px, padding `4px 15px`, weight 600, radius 4px, label 13px.

| Variantă | Aspect |
| --- | --- |
| **Primary** | Umplut cu gradient 135° `#8964B4 → #6A4791`, text alb. E „butonul violet Heroku”. |
| **Secondary** | Outline 1px `#79589F`, text violet, fundal alb. |
| **Tertiary** | Fără border vizibil greu, text `#79589F` pe transparent/alb. Acțiune terță. |
| **Danger primary** | Solid `#DE0A0A`, text alb. Delete / destroy. |
| **Danger** | Outline roșu, fundal alb. |
| **Warning** | Outline `#C74C00`. |
| **Info / Success** | Outline albastru / verde. |

Small: aceleași reguli, 26px înalt, 12px text. Button group: butoane secondary lipite, colțuri doar pe capete.

Primary e **singurul** buton cu gradient. Restul sunt plate. Asta e o regulă vizuală importantă: gradient = acțiunea principală, restul e liniște.

### Input-uri

- Radius 4px, font 13px, padding `5px 10px`, line-height 20px.
- Fundal alb, border `#CFD7E6`, **inner shadow** `inset 0 1px 2px rgba(207,215,230,.4)` — arată ușor „inset”, ca un câmp real, nu ca un underline Material.
- Focus: ring Heroku (`.hk-focus-ring`), nu glow gros.
- Readonly / disabled: aceleași dimensiuni, contrast mai slab.

Select-ul `.hk-select` urmează aceeași geometrie — nu native ugly, dar nici custom listbox fancy. Dashboard-ul e pragmatic.

### Badge-uri

Pill, 12px, weight 600, padding orizontal 5px.

- Default: fundal `#62738D`, text alb.
- Outline: border gri, text gri.
- Alpha: outline portocaliu `#C74C00`.
- Beta: outline albastru `#006DEB`.
- New: pill plin (accent).
- Code: **square 4px**, fundal `#F7F8FB`, border `#CFD7E6`, monospace, text `#475366` — pentru SHA-uri (`12dd0f2a`). Foarte caracteristic Heroku.

### Bannere și toasts

Banner full-width, 13px, padding mic, border 1px pe culoarea semantică, fundal washed:

- info: text `#006DEB` pe `#F6FAFF`, border `#8EBDF1`
- success: `#008700` pe `#F8FCF9`
- warning: `#C74C00` pe `#FFFAF6`
- danger: `#DE0A0A` pe `#FDF6F6`

Toast: aceeași logică, radius 4px, umbră `shadow-outer-3` (foarte slabă).

### Tab-uri

Vezi 7.4. Sunt **underline tabs**, nu pills, nu segmented control. Linia de jos e parte din identitate.

### Carduri și umbre

Umbrele sunt **reci și slabe**, tintate cu slate (`rgba(89,105,129, …)`), nu negru pur:

- `shadow-outer-1` — card implicit: hairline + 1px lift.
- `shadow-outer-2` — dropdown / popover.
- `shadow-outer-3` — toast, aproape invizibil.
- `shadow-inner-*` — wells, inputs.

Nu există carduri cu shadow mare și radius 16px. Heroku arată **plat-cu-un-fir-de-adâncime**.

### Icoane (Malibu)

Bibliotecă SVG sprite, 100+ glyphs, același set pe marketing și produs.

- Dimensiuni din scala Tachyons (`w1`–`w4`, de obicei `w2 h2` ≈ 32px sau mai mici în UI).
- Fill: `.fill-purple` / `.malibu-fill-gradient-purple` pe acțiuni de brand; gri pe rest.
- Stroke/outline consistent, colțuri potrivite cu radius 4px al UI-ului.
- Accesibilitate: `<title>` + `aria-labelledby` dacă icoana e informatională; `<title>` gol dacă e decor.

Identicon-uri circulare (`.br-100`) pentru useri fără poză — un pattern recunoscut în header.

---

## 9. Densitate, spațiu, radius, mișcare

Heroku produs = **compact**.

- Controale 32px / 26px, nu 40–44px mobile-first.
- Type 13px ca default, nu 16px.
- Spațiere Tachyons (4px base): padding-urile uzuale sunt 10–15px, nu 24–32px.
- Radius: **4px** e „limba” controalelor. 6px e cutia. Pill e doar badge-ul.
- Tranziții scurte (`.hk-input` face `background/border-color .1s ease`). Fără motion de marketing în Dashboard.
- Focus ring vizibil (accesibilitate), nu outline-ul nativ urât.

Pe mobile, același sistem: lista se stivuie, tab-urile scrollează orizontal, Quick Jump rămâne. Nu e un app nativ separat — e același UI, comprimat. Contrastul a fost verificat și pe ecrane mici (Review Apps etc.).

---

## 10. Interacțiune și UX vizual (ce simți)

Din redesign-ul de Dashboard și din docs:

1. **Content over chrome** — puține rame, multe date.
2. **View-first** — te uiți; edit-ul e un mod explicit, ca să nu scalezi / ștergi din greșeală.
3. **Jump, don’t hunt** — Quick Jump + breadcrumb în loc de ierarhii de meniuri.
4. **Friendly, not cute** — violetul și Avant Garde pe marketing sunt calde; în produs, caldura e doar în `#79589F` și în copy, nu în ilustrații mascote.
5. **Developer console** — SHA-uri monospace, badge-uri de plan, tabele de dynos, metrici. Arată a instrument, nu a SaaS lifestyle.

---

## 11. Accesibilitate ca parte din look

În 2018–2019, Dashboard-ul avea ~300 de elemente sub contrastul WCAG AA (gri pal pe alb). După audit, griurile au fost întunecate; albastrul de link a fost întărit. Rezultatul vizual: **același layout, dar textul „stă” pe pagină** — `#475366` / `#62738D` în loc de griuri spălate.

Implicație pentru oricine copiază look-ul: nu folosi `#A0AEC0` pe alb și să-i spui „Heroku”. Heroku de azi e **slate lizibil + violet `#79589F`**.

Brand-ul Salesforce a accelerat asta (pledge de accesibilitate, VPAT public).

---

## 12. Sistemul intern, pe scurt

| Piesă | Rol |
| --- | --- |
| [**Purple3**](https://design.herokai.com/purple3) | Atomic CSS (Tachyons + PostCSS) pentru **produse**. Helper-e `hk-*` pentru buton, tab, input, badge, well, toast. |
| [**Shibori3**](https://design.herokai.com/shibori3) | Același model, pentru **marketing**. |
| [**Malibu**](https://design.herokai.com/malibu) | Sprite SVG de icoane, comun. |
| **react-hk-components** / Ember | Wrappers (HKModal, HKDropdown) peste aceleași clase, ca tool-urile interne să arate identic indiferent de framework. |

Purple3 e hibrid: poți scrie un buton din atomi (`.tc .br1 .f5 .ph3 .fw6 .bg-gradient-primary .white`) sau cu `.hk-button--primary`. De aia Dashboard-ul rămâne consistent pe zeci de suprafețe (Ember, React, tool-uri interne).

CDN:

```html
<link rel="stylesheet" href="https://www.herokucdn.com/purple3/latest/purple3.min.css">
```

---

## 13. Recapitulare vizuală — „dacă ar trebui să-l desenez din memorie”

**Marketing**

- Câmp violet `#300B60 → #5A1BA9`, glow radial.
- Headline alb, Avant Garde, mare.
- Body Salesforce Sans.
- Logo H + HEROKU + lockup Salesforce.
- CTA alb sau Purple 30.
- Screenshot de produs (UI deschis) așezat pe violet, ca o fereastră.

**Produs**

- Pagină `#F7F8FB` / alb, nu violet.
- Top bar albă, joasă, Quick Jump, avatar rotund.
- Breadcrumb de context, nu sidebar.
- Tab-uri cu underline violet `#79589F` / `#A997BF`.
- Text slate `#323B49` / `#475366` / `#62738D`.
- Un singur buton cu gradient violet `#8964B4 → #6A4791`; restul outline.
- Input-uri 13px, border `#CFD7E6`, inner shadow.
- Radius 4px peste tot.
- Icoane Malibu, fill violet sau gri.
- Badge pill + badge monospace pentru SHA.
- Umbre aproape invizibile, reci.

Dacă exagerezi violetul în Dashboard, **nu mai arată a Heroku**. Dacă scoți violetul de tot, arată a orice admin gri. Echilibrul e: **hârtie rece + un fir de `#79589F`**.

---

## 14. Surse

- [Heroku Brand Guidelines](https://devcenter.heroku.com/articles/heroku-brand-guidelines) — logo, paletă digitală/print, gradiente, Avant Garde + Salesforce Sans, lockup Salesforce.
- [Heroku Design](https://design.herokai.com/) — harta Purple3 / Shibori3 / Malibu.
- [Purple3 documentation](https://design.herokai.com/purple3/docs) și CSS live `purple3.min.css` — tokeni reali de produs (culori, type scale 22→11px, butoane 32px, umbre, componente `hk-*`).
- [The Heroku Dashboard](https://devcenter.heroku.com/articles/heroku-dashboard) — Quick Jump, context switcher, user menu, favorites, tab-uri de app.
- [Simplified navigation in the Heroku Dashboard](https://devcenter.heroku.com/changelog-items/1547) — breadcrumb nav (2019).
- [New Heroku Dashboard and Metrics (2014)](https://www.heroku.com/blog/new-dashboard-and-metrics-beta/) — „content over chrome”, Ember, view-first.
- [Making accessibility a top priority](https://arianaescobar.com/portfolio/heroku-accessibility.html) — contrast AA, paleta de griuri actuală.
- [Purple3 în Design System Gallery](https://designsystem.gallery/design-systems/purple3) — densitate de consolă, Salesforce Sans în stack, primary 32×13px.
- [heroku.com](https://www.heroku.com/) — look-ul de marketing curent (violet profund, mesaj Salesforce, produs ca fereastră).

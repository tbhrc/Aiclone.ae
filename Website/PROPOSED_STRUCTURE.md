And also if there was any changes made to the PRD, then just create another version 1.2 because we are now at version 1.2. All the changes you've made earlier count as version 1.2.# AIClone.ae Multi-Page Website Structure

## Proposed Folder Structure

```
Website/
├── index.html                    # Home / Landing Page (EXISTING - will be refactored)
├── css/
│   └── styles.css                # Global styles, design tokens, glassmorphism utilities
├── js/
│   └── main.js                   # Navigation, accordions, form validation, animations
├── pages/
│   ├── 72-hour-digital-ai-twin.html    # Product / Service deep-dive
│   ├── pricing.html                     # Full 3-tier pricing page
│   ├── founder.html                     # David Potgieter full bio
│   ├── resources.html                   # Blog / Resources hub
│   ├── confidentiality.html             # Privacy, ethics, data handling
│   ├── apply.html                       # Application / Waitlist form (dedicated)
│   └── contact.html                     # Contact page
├── assets/
│   ├── images/
│   │   ├── logo.svg              # AIClone.ae logo
│   │   ├── founder-david.jpg     # David Potgieter photo
│   │   ├── hero-bg.jpg           # Hero background (optional)
│   │   └── og-image.jpg          # Social sharing image
│   └── icons/                    # Any custom icons if needed
└── components/
    ├── header.html               # Reusable header/nav (for reference)
    └── footer.html               # Reusable footer (for reference)
```

---

## Page Breakdown

### 1. `index.html` – Home / Landing Page
**Purpose:** Primary sales page and brand introduction

**Sections:**
- Hero with headline + CTA
- Social proof strip
- Pain points (Content Treadmill, Stuck Knowledge)
- Solution intro (What is a Digital AI Twin?)
- BIVV overview (summarized)
- Who this is for / not for
- Use cases preview
- Pricing overview (3 cards linking to full page)
- Final CTA

---

### 2. `pages/72-hour-digital-ai-twin.html` – Product Page
**Purpose:** Deep dive into the BIVV methodology and 72-hour process

**Sections:**
- Short hero
- BIVV Method full breakdown (Brain, Identity, Voice, Video)
- Day-by-day timeline
- Deliverables list
- Logistics & locations (villa, jet, etc.)
- Privacy & ownership summary
- Process FAQ
- CTA to Apply

---

### 3. `pages/pricing.html` – Pricing Page
**Purpose:** Full pricing breakdown with comparison

**Sections:**
- Intro headline
- 3 pricing tier cards (detailed features)
  - Tier 1: 72-Hour Clone (AED 25,000+)
  - Tier 2: Executive Twin (AED 45,000+)
  - Tier 3: Elite Digital Legacy (AED 75,000+)
- Value framing section
- Comparison strip (vs. media team, vs. DIY tools)
- Pricing FAQ
- CTA to Apply

---

### 4. `pages/founder.html` – Founder Page
**Purpose:** Build trust through David's story

**Sections:**
- Hero with photo
- Background (recruitment, coaching, consulting)
- Why AIClone exists
- Philosophy on AI, legacy, time
- Career timeline
- CTA to connect / apply

---

### 5. `pages/resources.html` – Resources Hub
**Purpose:** Educational content and lead magnet

**Sections:**
- Intro
- Featured guides:
  - "What is a Digital AI Twin?"
  - "7 Ways a Twin Supports a Founder"
  - "How the 72-Hour Process Works"
  - "Ethics & Privacy in AI Cloning"
- Blog article index (future posts)
- Lead magnet: "Download the AIClone Overview Deck"
- CTA

---

### 6. `pages/confidentiality.html` – Confidentiality & Data Page
**Purpose:** Address ethics, safety, and trust concerns

**Sections:**
- Hero
- Core principles (ownership, NDA, no sharing)
- Data handling details
- Rights & ownership
- Deletion policy
- CTA to contact or apply

---

### 7. `pages/apply.html` – Application Page
**Purpose:** Primary lead capture

**Sections:**
- Hero with scarcity messaging
- Application form (comprehensive fields)
- Expectation setting (screening process)
- What happens next

---

### 8. `pages/contact.html` – Contact Page
**Purpose:** Simple contact form

**Sections:**
- Contact form (name, email, company, message)
- Alternative: WhatsApp / Email links
- Office location (Dubai)

---

## Shared Components

### Header (all pages)
- Logo
- Navigation: Home, 72-Hour Twin, Pricing, Founder, Resources, Confidentiality
- CTA buttons: Join Waitlist, Apply for Your Twin
- Mobile hamburger menu

### Footer (all pages)
- Brand tagline
- Quick links
- Legal links (Terms, Privacy, Avatar Rights)
- Contact info
- Copyright

---

## Global CSS Structure (`css/styles.css`)

```
- CSS Variables (colors, spacing, shadows)
- Base/Reset styles
- Typography (Inter font)
- Layout utilities
- Glassmorphism components
- Button styles (.btn-primary, .btn-secondary)
- Card styles
- Form styles
- Animation utilities
- Responsive breakpoints
```

---

## Global JS Structure (`js/main.js`)

```
- Lucide icons initialization
- Mobile menu toggle
- Smooth scroll for anchor links
- Fade-in scroll observer
- FAQ accordion functionality
- Form validation (optional)
```

---

## Approval Needed

Please review this structure and let me know:
1. ✅ Approve as-is
2. ➕ Add pages
3. ➖ Remove pages
4. ✏️ Rename or reorganize anything

Once approved, I will create all the folders and files.

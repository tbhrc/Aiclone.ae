# AIClone.ae Website

## Project Overview

AIClone.ae is a premium, white-glove service in Dubai offering "Digital AI Twins" for high-ticket founders, CEOs, influencers, and thought leaders. The service creates high-fidelity digital replicas (avatar + voice + knowledge) in a 72-hour engagement.

This repository contains the source code for the AIClone.ae website, a multi-page site designed to showcase the service, explain the BIVV (Brain, Identity, Voice, Video) framework, and capture qualified leads.

## Project Structure

The website follows a clear, organized structure to maintain code quality and scalability:

```
Website/
├── index.html                    # Home / Landing Page
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
│   ├── apply.html                       # Application / Waitlist form
│   └── contact.html                     # Contact page
├── assets/
│   ├── images/                   # Images, logos, and icons
│   └── icons/
└── components/
    ├── header.html               # Reusable header reference
    └── footer.html               # Reusable footer reference
```

## Version Control & Changelog

We utilize a strict version control system to track the evolution of the website. 

**Current Version:** v1.1  
**Next Version:** v1.2

### Versioning Rules

1.  **Top-Down History:** The version history is maintained in chronological order. The oldest version (v1.0) is at the top of the history log, and new versions are appended to the bottom.
2.  **Incremental Updates:** significant structural, content, or feature changes trigger a new version number (e.g., v1.1 → v1.2).
3.  **Documentation:** Every version update must be documented in the `Versions/changelog.md` file and the corresponding version folder.

### How to Create a New Version

When making changes to the website:
1.  **Plan:** Define the scope of changes for the new version.
2.  **Execute:** Implement the changes in the `Website/` directory.
3.  **Document:** 
    *   Add a new entry to the bottom of the `Versions/changelog.md` file describing the changes.
    *   Create a task list or summary of the new version.
4.  **Archive (Optional):** If required by the workflow, snapshots of previous versions are stored in the `Versions/` directory.

### Version History

*(See `Versions/changelog.md` for detailed change logs)*

| Version | Date | Summary |
| :--- | :--- | :--- |
| **v1.0** | *Initial* | Initial website launch and structure setup. |
| **v1.1** | *Current* | Expansion to multi-page structure, implementing PRD v1.1, adding pricing logic, and refining the BIVV process explanation. |
| **v1.2** | *Upcoming* | Any subsequent changes and refinements to the current codebase. |

## Development & Usage

1.  **Local Development:**
    *   Clone the repository.
    *   Open the `Website` folder.
    *   Use a local server (e.g., Live Server in VS Code) to run `index.html`.
    *   Ensure all links and assets load correctly relative to the project root.

2.  **Deployment:**
    *   The `Website/` folder contains the production-ready assets (HTML, CSS, JS, Images).
    *   Upload the contents of the `Website/` folder to the hosting provider (e.g., Hostinger).

---
*Maintained by the AIClone.ae Technical Team*

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <title>AIClone.ae – 72 Hour Digital AI Twin in Dubai</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="AIClone.ae creates a handcrafted Digital AI Twin for Dubai founders, CEOs and leaders in 72 hours so you can grow your brand without recording again." />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            midnight: '#020617',
            obsidian: '#050816',
            softgold: '#f4c96b',
            slateglass: 'rgba(15,23,42,0.75)'
          },
          boxShadow: {
            'glow-gold': '0 0 40px rgba(244,201,107,0.35)'
          },
          backgroundImage: {
            'radial-gold': 'radial-gradient(circle at top, rgba(244,201,107,0.18), transparent 60%)',
            'radial-blue': 'radial-gradient(circle at bottom, rgba(56,189,248,0.15), transparent 60%)'
          },
          keyframes: {
            float: {
              '0%,100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-10px)' }
            },
            glowpulse: {
              '0%,100%': { boxShadow: '0 0 0 rgba(244,201,107,0)' },
              '50%': { boxShadow: '0 0 40px rgba(244,201,107,0.35)' }
            },
            gradientshift: {
              '0%,100%': { backgroundPosition: '0% 50%' },
              '50%': { backgroundPosition: '100% 50%' }
            }
          },
          animation: {
            float: 'float 10s ease-in-out infinite',
            glowpulse: 'glowpulse 4s ease-in-out infinite',
            gradientshift: 'gradientshift 20s ease infinite'
          }
        }
      }
    };
  </script>
  <style>
    html, body {
      scroll-behavior: smooth;
      background-color: #020617;
    }
    .glass {
      background: linear-gradient(to bottom right, rgba(15,23,42,0.9), rgba(15,23,42,0.6));
      border: 1px solid rgba(148,163,184,0.2);
      backdrop-filter: blur(18px);
    }
    .fade-section {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
    .fade-section.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-midnight text-slate-100 antialiased">

  <!-- Page background decorations -->
  <div class="pointer-events-none fixed inset-0 -z-10">
    <div class="absolute -top-48 left-1/2 h-96 w-[42rem] -translate-x-1/2 rounded-full bg-radial-gold opacity-70 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 h-[28rem] w-[28rem] bg-radial-blue opacity-60 blur-3xl"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-obsidian/80 via-midnight to-black"></div>
  </div>

  <!-- Navbar -->
  <header class="sticky top-0 z-40 border-b border-slate-800/70 bg-slateglass">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-4 lg:px-6">
      <a href="#top" class="flex items-center gap-3">
        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-tr from-softgold/90 via-softgold/60 to-amber-200/80 shadow-glow-gold">
          <span class="text-lg font-semibold text-obsidian tracking-tight">AI</span>
        </div>
        <div class="flex flex-col leading-tight">
          <span class="text-sm font-semibold tracking-[0.18em] text-slate-200 uppercase">AIClone.ae</span>
          <span class="text-xs text-slate-400">72 hour Digital AI Twins</span>
        </div>
      </a>
      <nav class="hidden items-center gap-7 text-sm font-medium text-slate-200 md:flex">
        <a href="#offer" class="hover:text-softgold transition-colors">Offer</a>
        <a href="#process" class="hover:text-softgold transition-colors">72 hour process</a>
        <a href="#clients" class="hover:text-softgold transition-colors">Who it is for</a>
        <a href="#use-cases" class="hover:text-softgold transition-colors">Use cases</a>
        <a href="#ethics" class="hover:text-softgold transition-colors">Confidentiality</a>
        <a href="#founder" class="hover:text-softgold transition-colors">Founder</a>
      </nav>
      <div class="hidden items-center gap-2 md:flex">
        <a href="#waitlist" class="rounded-full border border-softgold/60 px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-softgold hover:bg-softgold/10">
          Join waitlist
        </a>
        <a href="#apply" class="rounded-full bg-softgold px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-obsidian shadow-glow-gold hover:bg-amber-300">
          Apply for your twin
        </a>
      </div>
      <button id="mobile-menu-toggle" class="inline-flex items-center justify-center rounded-lg border border-slate-700/80 p-2 text-slate-200 md:hidden">
        <span class="sr-only">Open navigation</span>
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <div id="mobile-menu" class="hidden border-t border-slate-800/80 bg-obsidian/95 md:hidden">
      <div class="mx-auto flex max-w-6xl flex-col gap-2 px-4 py-4 text-sm">
        <a href="#offer" class="py-1">Offer</a>
        <a href="#process" class="py-1">72 hour process</a>
        <a href="#clients" class="py-1">Who it is for</a>
        <a href="#use-cases" class="py-1">Use cases</a>
        <a href="#ethics" class="py-1">Confidentiality</a>
        <a href="#founder" class="py-1">Founder</a>
        <div class="mt-3 flex flex-col gap-2">
          <a href="#apply" class="rounded-full bg-softgold px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-obsidian text-center">
            Apply for your twin
          </a>
          <a href="#waitlist" class="rounded-full border border-softgold/70 px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-softgold text-center">
            Join waitlist
          </a>
        </div>
      </div>
    </div>
  </header>

  <main id="top" class="mx-auto max-w-6xl px-4 pt-10 pb-20 lg:px-6 lg:pt-16">

    <!-- Hero section -->
    <section id="offer" class="relative grid items-center gap-10 pb-16 lg:grid-cols-[minmax(0,1.15fr)_minmax(0,1fr)] lg:gap-14 lg:pb-24 fade-section">
      <!-- Floating orb -->
      <div class="pointer-events-none absolute -right-16 top-24 h-56 w-56 rounded-full bg-gradient-to-br from-softgold/70 via-amber-200/40 to-softgold/10 opacity-50 blur-3xl lg:right-0 lg:h-72 lg:w-72"></div>

      <div class="relative space-y-7">
        <p class="text-xs font-semibold uppercase tracking-[0.26em] text-softgold/90">
          Dubai • Digital AI Twin • 72 hours
        </p>
        <h1 class="text-3xl font-semibold leading-tight text-slate-50 sm:text-4xl lg:text-[2.8rem] lg:leading-[1.1]">
          Your Digital AI Twin in seventy two hours so your brand grows without you recording again.
        </h1>
        <p class="max-w-xl text-sm leading-relaxed text-slate-300 sm:text-base">
          AIClone.ae is a private, white glove service in Dubai that captures your brain, voice and on camera presence once, then hands your team a handcrafted Digital AI Twin that speaks for you everywhere.
        </p>

        <div class="flex flex-wrap items-center gap-3 pt-2">
          <a href="#apply" class="inline-flex items-center justify-center gap-2 rounded-full bg-softgold px-6 py-3 text-xs font-semibold uppercase tracking-[0.22em] text-obsidian shadow-glow-gold hover:bg-amber-300">
            Apply for your twin
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M5 12h14M13 6l6 6-6 6" />
            </svg>
          </a>
          <a href="#waitlist" class="inline-flex items-center justify-center rounded-full border border-softgold/80 px-6 py-3 text-xs font-semibold uppercase tracking-[0.22em] text-softgold hover:bg-softgold/10">
            Join the waitlist
          </a>
        </div>
        <p class="text-[0.7rem] uppercase tracking-[0.26em] text-slate-400 pt-1">
          One client per seventy two hour block • Limited availability
        </p>

        <div class="mt-6 grid gap-4 text-xs text-slate-300 sm:grid-cols-3">
          <div class="glass rounded-2xl p-4">
            <p class="mb-1 text-[0.7rem] uppercase tracking-[0.2em] text-softgold">Category</p>
            <p class="text-sm font-medium text-slate-50">Digital AI Twin for leaders</p>
            <p class="mt-1 text-[0.78rem] text-slate-400">
              Identity level content automation, not a generic AI agency.
            </p>
          </div>
          <div class="glass rounded-2xl p-4">
            <p class="mb-1 text-[0.7rem] uppercase tracking-[0.2em] text-softgold">Experience</p>
            <p class="text-sm font-medium text-slate-50">White glove, human led</p>
            <p class="mt-1 text-[0.78rem] text-slate-400">
              Delivered at your villa, office, penthouse or jet with a discreet crew.
            </p>
          </div>
          <div class="glass rounded-2xl p-4">
            <p class="mb-1 text-[0.7rem] uppercase tracking-[0.2em] text-softgold">Investment</p>
            <p class="text-sm font-medium text-slate-50">From mid five figures (AED)</p>
            <p class="mt-1 text-[0.78rem] text-slate-400">
              One client at a time for serious founders, CEOs and authorities.
            </p>
          </div>
        </div>
      </div>

      <!-- Hero visual -->
      <div class="relative">
        <div class="glass relative overflow-hidden rounded-3xl border border-softgold/20 p-5 shadow-2xl shadow-black/70">
          <div class="absolute inset-0 bg-[radial-gradient(circle_at_10%_0,rgba(244,201,107,0.12),transparent_60%),radial-gradient(circle_at_90%_100%,rgba(59,130,246,0.18),transparent_55%)] opacity-80"></div>

          <div class="relative space-y-4">
            <!-- Split face concept -->
            <div class="flex items-center gap-4">
              <div class="relative h-24 w-24 overflow-hidden rounded-2xl border border-slate-600/70 bg-slate-900">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900"></div>
                <div class="absolute inset-0 flex">
                  <div class="flex-1 bg-[url('https://images.pexels.com/photos/3775534/pexels-photo-3775534.jpeg?auto=compress&cs=tinysrgb&w=640')] bg-cover bg-center"></div>
                  <div class="flex-1 bg-[url('https://images.pexels.com/photos/7652072/pexels-photo-7652072.jpeg?auto=compress&cs=tinysrgb&w=640')] bg-cover bg-center mix-blend-screen opacity-70"></div>
                </div>
                <div class="absolute inset-y-0 left-1/2 w-px bg-gradient-to-b from-transparent via-softgold/80 to-transparent"></div>
              </div>
              <div class="space-y-1">
                <p class="text-[0.7rem] uppercase tracking-[0.26em] text-softgold/80">Real you • Digital you</p>
                <p class="text-sm font-medium text-slate-50">
                  One brain. Two presences.
                </p>
                <p class="text-[0.8rem] text-slate-300">
                  Your Digital AI Twin learns your frameworks, tone and stories so your presence scales without your calendar breaking.
                </p>
              </div>
            </div>

            <!-- Small stat row -->
            <div class="grid grid-cols-3 gap-3 pt-2 text-center text-xs">
              <div class="rounded-2xl border border-slate-600/80 bg-slate-900/70 px-3 py-3">
                <p class="text-lg font-semibold text-softgold">72h</p>
                <p class="text-[0.7rem] uppercase tracking-[0.18em] text-slate-400">Full build</p>
              </div>
              <div class="rounded-2xl border border-slate-600/80 bg-slate-900/70 px-3 py-3">
                <p class="text-lg font-semibold text-softgold">1</p>
                <p class="text-[0.7rem] uppercase tracking-[0.18em] text-slate-400">Client at a time</p>
              </div>
              <div class="rounded-2xl border border-slate-600/80 bg-slate-900/70 px-3 py-3">
                <p class="text-lg font-semibold text-softgold">Dubai</p>
                <p class="text-[0.7rem] uppercase tracking-[0.18em] text-slate-400">Villa • office • jet</p>
              </div>
            </div>

            <!-- Animated timeline preview -->
            <div class="mt-3 rounded-2xl border border-slate-600/70 bg-slate-900/70 p-3">
              <p class="mb-2 text-[0.7rem] uppercase tracking-[0.2em] text-softgold">Seventy two hour overview</p>
              <div class="space-y-2 text-[0.8rem]">
                <div class="flex items-center gap-2">
                  <div class="h-2 w-2 rounded-full bg-softgold"></div>
                  <p><span class="font-semibold text-slate-50">Day one</span> Brain and identity extraction intensive.</p>
                </div>
                <div class="flex items-center gap-2">
                  <div class="h-2 w-2 rounded-full bg-softgold/70"></div>
                  <p><span class="font-semibold text-slate-50">Day two</span> Voice cloning and avatar image capture.</p>
                </div>
                <div class="flex items-center gap-2">
                  <div class="h-2 w-2 rounded-full bg-softgold/50"></div>
                  <p><span class="font-semibold text-slate-50">Day three</span> Twin calibration, sample content and handover.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Floating badge -->
        <div class="mt-4 flex items-center justify-end">
          <div class="glass animate-float inline-flex items-center gap-2 rounded-full px-4 py-2 text-[0.7rem] text-slate-200">
            <span class="inline-block h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
            <span class="uppercase tracking-[0.18em] text-slate-400">Category defining in Dubai</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Social proof strip -->
    <section class="fade-section border-y border-slate-800/80 py-6">
      <div class="flex flex-col items-center justify-between gap-4 text-xs text-slate-400 sm:flex-row">
        <p class="uppercase tracking-[0.22em] text-slate-500">
          Trusted by leaders who move fast
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 text-[0.78rem]">
          <div class="rounded-full border border-slate-700/80 px-3 py-1.5">
            Dubai founders and CEOs
          </div>
          <div class="rounded-full border border-slate-700/80 px-3 py-1.5">
            Influencers turned coaches
          </div>
          <div class="rounded-full border border-slate-700/80 px-3 py-1.5">
            Elite real estate performers
          </div>
          <div class="rounded-full border border-slate-700/80 px-3 py-1.5">
            Thought leaders and authors
          </div>
        </div>
      </div>
    </section>

    <!-- Pain section -->
    <section id="pain" class="fade-section py-14 lg:py-18">
      <div class="grid gap-10 lg:grid-cols-[minmax(0,1.15fr)_minmax(0,1fr)] lg:items-start">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">The problem</p>
          <h2 class="mt-2 text-2xl font-semibold text-slate-50 sm:text-3xl">
            Your business depends on your presence. Your schedule does not.
          </h2>
          <p class="mt-4 max-w-xl text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
            You are not lazy and you are not disorganised. You are at the stage where your time is more valuable than any content calendar. Yet algorithms, launches and investors still expect you on camera.
          </p>
        </div>
        <div class="space-y-4">
          <div class="glass rounded-3xl p-5">
            <h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.22em] text-softgold">Content treadmill</h3>
            <ul class="space-y-2 text-[0.9rem] text-slate-300">
              <li>“If I do not post several videos a day, my reach and revenue dip.”</li>
              <li>Every platform prefers video. Your calendar does not.</li>
              <li>Scripting, filming, retakes and editing consume mental bandwidth that should go into deals and leadership.</li>
            </ul>
          </div>
          <div class="glass rounded-3xl p-5">
            <h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.22em] text-softgold">Stuck knowledge and legacy</h3>
            <ul class="space-y-2 text-[0.9rem] text-slate-300">
              <li>Decades of experience stay in your head or scattered across decks, interviews and voice notes.</li>
              <li>There is no clear system to convert it into scalable assets, courses or internal training.</li>
              <li>You want a legacy asset that outlives launches, algorithms and your current schedule.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Solution intro -->
    <section class="fade-section py-10">
      <div class="glass relative overflow-hidden rounded-3xl border border-softgold/20 px-6 py-8 sm:px-8 lg:px-10 lg:py-10">
        <div class="absolute -right-10 -top-16 h-40 w-40 rounded-full bg-gradient-to-br from-softgold/35 via-softgold/5 to-transparent blur-3xl"></div>
        <div class="relative grid gap-8 lg:grid-cols-[minmax(0,1.2fr)_minmax(0,1fr)] lg:items-center">
          <div>
            <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">The answer</p>
            <h2 class="mt-2 text-2xl font-semibold text-slate-50 sm:text-3xl">
              A Digital AI Twin that looks, sounds and thinks like you.
            </h2>
            <p class="mt-4 max-w-xl text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
              A Digital AI Twin is a high fidelity version of you that has been trained on your ideas, your voice and your on camera presence. It can create content, teach, present and communicate on your behalf across platforms without you stepping in front of a camera.
            </p>
            <ul class="mt-5 grid gap-3 text-[0.9rem] text-slate-200 sm:grid-cols-2">
              <li class="flex gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-softgold"></span>
                <span>Speaks in your natural voice, tone and pace with emotional accuracy.</span>
              </li>
              <li class="flex gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-softgold"></span>
                <span>Appears as you in video with carefully designed scenes that fit your brand.</span>
              </li>
              <li class="flex gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-softgold"></span>
                <span>Is fed by your own frameworks, stories and language so it does not feel generic.</span>
              </li>
              <li class="flex gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-softgold"></span>
                <span>Becomes a serious, controlled asset with clear ownership and boundaries.</span>
              </li>
            </ul>
            <a href="#process" class="mt-5 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.24em] text-softgold/90">
              See how we build it in seventy two hours
              <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M5 12h14M13 6l6 6-6 6" />
              </svg>
            </a>
          </div>
          <div class="space-y-4 text-sm text-slate-300">
            <div class="rounded-2xl border border-slate-700/80 bg-slate-900/60 px-4 py-3">
              <p class="text-[0.7rem] uppercase tracking-[0.2em] text-softgold/80 mb-1">Not a gimmick</p>
              <p class="text-[0.9rem]">
                This is not a cheap talking head generator. It is an identity level asset created through consulting, psychology, media and AI.
              </p>
            </div>
            <div class="rounded-2xl border border-slate-700/80 bg-slate-900/60 px-4 py-3">
              <p class="text-[0.7rem] uppercase tracking-[0.2em] text-softgold/80 mb-1">Controlled and ethical</p>
              <p class="text-[0.9rem]">
                You decide where the twin is used, which topics are allowed and which boundaries are in place. Everything runs under strict confidentiality.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- BIVV framework and 72 hour process -->
    <section id="process" class="fade-section py-16">
      <div class="flex flex-col gap-8 lg:flex-row lg:items-start">
        <div class="lg:w-1/3">
          <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">The method</p>
          <h2 class="mt-2 text-2xl font-semibold text-slate-50 sm:text-3xl">
            The BIVV method in seventy two hours.
          </h2>
          <p class="mt-4 text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
            Brain, identity, voice and video captured in one private immersion. One client at a time. Nothing rushed. Nothing left shallow.
          </p>
        </div>
        <div class="grid flex-1 gap-6 lg:grid-cols-2">
          <div class="glass rounded-3xl p-5">
            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-softgold/80 mb-1">Day one • Brain</p>
            <h3 class="mb-2 text-sm font-semibold text-slate-50">Deep brain extraction session</h3>
            <p class="text-[0.9rem] text-slate-300">
              Two to six hours of guided interview and ideation that pull out your frameworks, philosophies, IP and signature stories.
            </p>
            <ul class="mt-3 space-y-1.5 text-[0.85rem] text-slate-300">
              <li>Record and transcribe everything so nothing is lost.</li>
              <li>Structure content pillars, models and catch phrases.</li>
              <li>Produce a “brain file” that your twin and team can reference.</li>
            </ul>
          </div>
          <div class="glass rounded-3xl p-5">
            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-softgold/80 mb-1">Day one • Identity</p>
            <h3 class="mb-2 text-sm font-semibold text-slate-50">Public persona and archetype mapping</h3>
            <p class="text-[0.9rem] text-slate-300">
              Define who you are on screen. King, magician, strategist, mentor. Decide how bold or discreet, how formal or conversational.
            </p>
            <ul class="mt-3 space-y-1.5 text-[0.85rem] text-slate-300">
              <li>Clarify how you want to be perceived by market and team.</li>
              <li>Set tonal rules for your Digital AI Twin.</li>
              <li>Align wardrobe, backdrop and visual cues with your status.</li>
            </ul>
          </div>
          <div class="glass rounded-3xl p-5">
            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-softgold/80 mb-1">Day two • Voice</p>
            <h3 class="mb-2 text-sm font-semibold text-slate-50">Voice cloning with emotional range</h3>
            <p class="text-[0.9rem] text-slate-300">
              Capture your voice through scripts and natural conversation. Train multiple profiles for teaching, persuasion and intimate messages.
            </p>
            <ul class="mt-3 space-y-1.5 text-[0.85rem] text-slate-300">
              <li>Serious, excited, reflective and direct modes.</li>
              <li>Refine pacing and emphasis until it sounds natural to you.</li>
              <li>Test on sample scripts for short and long form content.</li>
            </ul>
          </div>
          <div class="glass rounded-3xl p-5">
            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-softgold/80 mb-1">Days two and three • Video</p>
            <h3 class="mb-2 text-sm font-semibold text-slate-50">Avatar and scene creation</h3>
            <p class="text-[0.9rem] text-slate-300">
              Capture reference angles, lighting and expressions. Train a realistic avatar and design scenes that match villa, office or skyline.
            </p>
            <ul class="mt-3 space-y-1.5 text-[0.85rem] text-slate-300">
              <li>Studio, office, home library, skyline and neutral backdrops.</li>
              <li>Generate test clips and refine until movement feels right.</li>
              <li>Calibrate on final day so the twin feels like you in every sense.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Who this is for / not for -->
    <section id="clients" class="fade-section py-14">
      <div class="grid gap-8 lg:grid-cols-[minmax(0,1.1fr)_minmax(0,1fr)] lg:items-start">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">Fit and filter</p>
          <h2 class="mt-2 text-2xl font-semibold text-slate-50 sm:text-3xl">
            Built for leaders whose time is too valuable for recording days.
          </h2>
          <p class="mt-4 max-w-xl text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
            AIClone.ae exists for people whose presence moves markets, raises rounds and closes high ticket deals. It is not a tool for experimenting with content. It is an asset for those already in motion.
          </p>
        </div>
        <div class="grid gap-4">
          <div class="glass rounded-3xl p-5">
            <h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.22em] text-emerald-400">Who this is for</h3>
            <ul class="space-y-2 text-[0.9rem] text-slate-200">
              <li>Founders, CEOs and partners whose time is the main asset in their organisation.</li>
              <li>Influencers and coaches whose income depends on their face and voice, not editing skills.</li>
              <li>Real estate leaders and elite sales performers who need omnipresence without burnout.</li>
              <li>Authors and thought leaders who want evergreen teaching content without constant studio days.</li>
              <li>Early adopters who want an unfair advantage in their market and are comfortable with AI when handled correctly.</li>
            </ul>
          </div>
          <div class="glass rounded-3xl p-5">
            <h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.22em] text-rose-400">Who this is not for</h3>
            <ul class="space-y-2 text-[0.9rem] text-slate-300">
              <li>People looking for a cheap software subscription or template avatar tool.</li>
              <li>Those without an existing business, offer or audience to deploy a Digital AI Twin into.</li>
              <li>Anyone uncomfortable going deep during a seventy two hour process about their story, beliefs and frameworks.</li>
              <li>Teams that want volume over quality and are not concerned about ethics, privacy or reputation.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Use cases -->
    <section id="use-cases" class="fade-section py-14">
      <div class="mb-8 text-center">
        <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">Practical application</p>
        <h2 class="mt-2 text-2xl font-semibold text-slate-50 sm:text-3xl">
          Four ways your Digital AI Twin can work while you focus on higher stakes.
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
          Same mind, same message, different outputs. Once your twin exists, it can support marketing, sales, education and internal culture without asking you for another filming day.
        </p>
      </div>
      <div class="grid gap-6 md:grid-cols-2">
        <article class="glass group rounded-3xl p-5 transition-transform hover:-translate-y-1">
          <h3 class="mb-1 text-xs font-semibold uppercase tracking-[0.22em] text-softgold/90">Founder and CEO use case</h3>
          <p class="mb-3 text-[0.95rem] font-medium text-slate-100">
            Weekly letters, investor updates and hiring messages recorded by your twin while you are in transit.
          </p>
          <ul class="space-y-1.5 text-[0.9rem] text-slate-300">
            <li>Turn weekly CEO notes into video updates for team and investors.</li>
            <li>Record culture and values mini masterclasses once, then let your twin repeat them for every new hire.</li>
            <li>Announce roles, initiatives and product shifts without scheduling extra calls.</li>
          </ul>
        </article>
        <article class="glass group rounded-3xl p-5 transition-transform hover:-translate-y-1">
          <h3 class="mb-1 text-xs font-semibold uppercase tracking-[0.22em] text-softgold/90">Influencer and coach use case</h3>
          <p class="mb-3 text-[0.95rem] font-medium text-slate-100">
            Short form tips and long form teaching content without filming fatigue.
          </p>
          <ul class="space-y-1.5 text-[0.9rem] text-slate-300">
            <li>Release daily clips that sound like your best days on camera.</li>
            <li>Convert frameworks into course modules without booking the studio for weeks.</li>
            <li>Use clones for welcome sequences, webinars and soft spoken upsell videos.</li>
          </ul>
        </article>
        <article class="glass group rounded-3xl p-5 transition-transform hover:-translate-y-1">
          <h3 class="mb-1 text-xs font-semibold uppercase tracking-[0.22em] text-softgold/90">Real estate and elite sales use case</h3>
          <p class="mb-3 text-[0.95rem] font-medium text-slate-100">
            Always on authority content that qualifies and nurtures leads while you close deals.
          </p>
          <ul class="space-y-1.5 text-[0.9rem] text-slate-300">
            <li>Property explainer videos recorded by your twin, on demand.</li>
            <li>Market commentary clips that keep you in front of buyers and investors.</li>
            <li>Automated follow up sequences that feel personal, not generic.</li>
          </ul>
        </article>
        <article class="glass group rounded-3xl p-5 transition-transform hover:-translate-y-1">
          <h3 class="mb-1 text-xs font-semibold uppercase tracking-[0.22em] text-softgold/90">Author and thought leader use case</h3>
          <p class="mb-3 text-[0.95rem] font-medium text-slate-100">
            Books, frameworks and voice notes repurposed into a living teaching library.
          </p>
          <ul class="space-y-1.5 text-[0.9rem] text-slate-300">
            <li>Turn chapters into series, with your twin explaining key models on video.</li>
            <li>Transform audio memos into structured lessons and Q and A content.</li>
            <li>Create “office hours” style responses where your Digital AI Twin answers frequent questions.</li>
          </ul>
        </article>
      </div>
    </section>

    <!-- Experience & logistics -->
    <section id="experience" class="fade-section py-14">
      <div class="glass relative overflow-hidden rounded-3xl border border-softgold/25 px-6 py-8 sm:px-8 lg:px-10 lg:py-10">
        <div class="absolute -left-10 bottom-[-4rem] h-52 w-52 rounded-full bg-gradient-to-tr from-sky-500/15 via-cyan-300/10 to-transparent blur-3xl"></div>
        <div class="relative grid gap-8 lg:grid-cols-[minmax(0,1.15fr)_minmax(0,1fr)] lg:items-center">
          <div>
            <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">The experience</p>
            <h2 class="mt-2 text-2xl font-semibold text-slate-50 sm:text-3xl">
              We come to you. Villa, office, penthouse or jet.
            </h2>
            <p class="mt-4 max-w-xl text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
              This is built for privacy conscious leaders. The seventy two hour immersion feels like a private strategy retreat more than a tech demo. A small, discreet team handles everything from lighting to transcripts.
            </p>
            <ul class="mt-4 grid gap-3 text-[0.9rem] text-slate-300 sm:grid-cols-2">
              <li class="flex gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-softgold"></span>
                <span>Dubai and wider UAE coverage with travel aligned to your schedule.</span>
              </li>
              <li class="flex gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-softgold"></span>
                <span>Option to run sessions while travelling between cities on a jet, subject to logistics.</span>
              </li>
              <li class="flex gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-softgold"></span>
                <span>Minimal crew, security aware and comfortable in high trust environments.</span>
              </li>
              <li class="flex gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-softgold"></span>
                <span>Concierge style communication before and after the immersion.</span>
              </li>
            </ul>
          </div>
          <div class="space-y-4 text-sm text-slate-300">
            <div class="rounded-2xl border border-slate-700/80 bg-slate-900/70 p-4">
              <p class="text-[0.7rem] uppercase tracking-[0.2em] text-softgold/80 mb-1">What you walk away with</p>
              <ul class="space-y-1.5 text-[0.9rem]">
                <li>Your Digital AI Twin, voice model and avatar ready for deployment.</li>
                <li>A structured brain file of your IP, stories and favourite language.</li>
                <li>A starter library of sample videos across multiple scenarios.</li>
                <li>A thirty day content plan your team can execute immediately.</li>
                <li>A handover session to train your marketing or operations team.</li>
              </ul>
            </div>
            <div class="rounded-2xl border border-slate-700/80 bg-slate-900/70 p-4">
              <p class="text-[0.7rem] uppercase tracking-[0.2em] text-softgold/80 mb-1">Investment framing</p>
              <p class="text-[0.9rem]">
                Engagements start from the mid five figures in dirhams and are tailored to each client. The real return is time, leverage and the volume of evergreen content the twin can produce over years.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Ethics & confidentiality -->
    <section id="ethics" class="fade-section py-14">
      <div class="grid gap-8 lg:grid-cols-[minmax(0,1.1fr)_minmax(0,1fr)] lg:items-start">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">Safety and trust</p>
          <h2 class="mt-2 text-2xl font-semibold text-slate-50 sm:text-3xl">
            Your likeness, voice and ideas stay under your control.
          </h2>
          <p class="mt-4 max-w-xl text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
            AI clones raise valid questions about ethics, privacy and misuse. AIClone.ae is designed around those questions from day one. You retain ownership, decide boundaries and can request deletion of raw material at any point.
          </p>
        </div>
        <div class="space-y-4">
          <div class="glass rounded-3xl p-5">
            <h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.22em] text-softgold">Core principles</h3>
            <ul class="space-y-1.5 text-[0.9rem] text-slate-300">
              <li>You own your voice model, avatar and brain file. They are not resold or reused.</li>
              <li>All engagements are run under NDAs and clear likeness agreements.</li>
              <li>Storage, access and retention are defined in writing and can be tailored to your risk profile.</li>
              <li>We can agree explicit exclusions such as political content or sensitive topics.</li>
            </ul>
          </div>
          <div class="glass rounded-3xl p-5">
            <h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.22em] text-softgold">Misuse prevention</h3>
            <ul class="space-y-1.5 text-[0.9rem] text-slate-300">
              <li>Only approved team members receive access to twin credentials.</li>
              <li>We recommend workflows that separate script creation from final approvals.</li>
              <li>If anything feels off brand or uncomfortable, the twin can be paused or retrained.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Founder mini section -->
    <section id="founder" class="fade-section py-14">
      <div class="glass relative overflow-hidden rounded-3xl border border-slate-700/80 px-6 py-8 sm:px-8 lg:px-10 lg:py-10">
        <div class="absolute -right-10 top-0 h-40 w-40 rounded-full bg-gradient-to-br from-softgold/15 via-softgold/5 to-transparent blur-3xl"></div>
        <div class="relative grid gap-8 lg:grid-cols-[minmax(0,0.9fr)_minmax(0,1.1fr)] lg:items-center">
          <div class="flex justify-center lg:justify-start">
            <div class="relative h-32 w-32 overflow-hidden rounded-2xl border border-softgold/40 bg-slate-900 shadow-xl shadow-black/50">
              <div class="absolute inset-0 bg-[url('https://images.pexels.com/photos/3748221/pexels-photo-3748221.jpeg?auto=compress&cs=tinysrgb&w=640')] bg-cover bg-center"></div>
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
            </div>
          </div>
          <div>
            <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">Founder</p>
            <h2 class="mt-2 text-xl font-semibold text-slate-50 sm:text-2xl">
              Architect of the brain extraction and trusted advisor behind the twin.
            </h2>
            <p class="mt-3 text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
              AIClone.ae is led by David Potgieter, a Dubai based founder who has spent decades in recruitment, coaching and executive consulting. His craft has always been to listen deeply, extract what makes someone valuable and translate that into clear narratives.
            </p>
            <p class="mt-3 text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
              The natural next step was to apply that ability to AI powered identity. The BIVV sessions feel less like an interview and more like a founder to founder conversation that leaves you seeing your own story with new clarity.
            </p>
            <a href="#apply" class="mt-4 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.24em] text-softgold/90">
              Start the conversation
              <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M5 12h14M13 6l6 6-6 6" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="fade-section py-14">
      <div class="mb-7 text-center">
        <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">Questions</p>
        <h2 class="mt-2 text-2xl font-semibold text-slate-50 sm:text-3xl">
          Frequently asked details about your Digital AI Twin.
        </h2>
      </div>
      <div class="space-y-3">
        <!-- FAQ item -->
        <details class="group glass rounded-2xl border border-slate-700/80 p-4">
          <summary class="flex cursor-pointer items-center justify-between gap-3 text-sm font-medium text-slate-100">
            <span>How realistic will my Digital AI Twin be?</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-slate-600/80 text-[0.7rem] text-slate-300 group-open:border-softgold group-open:text-softgold">+</span>
          </summary>
          <div class="mt-3 text-[0.9rem] text-slate-300">
            The goal is not perfection for its own sake. It is believability and trust. The twin should sound and feel like you to your audience. We train for emotional range, visual presence and phrasing that match you closely while avoiding uncanny or exaggerated results.
          </div>
        </details>
        <details class="group glass rounded-2xl border border-slate-700/80 p-4">
          <summary class="flex cursor-pointer items-center justify-between gap-3 text-sm font-medium text-slate-100">
            <span>Is this safe and ethical?</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-slate-600/80 text-[0.7rem] text-slate-300 group-open:border-softgold group-open:text-softgold">+</span>
          </summary>
          <div class="mt-3 text-[0.9rem] text-slate-300">
            Ethics are treated as a first requirement, not an afterthought. Every engagement runs under NDAs and likeness agreements. You control where the twin is used, which topics are permitted and which are off limits. We do not resell or reuse your data for other clients.
          </div>
        </details>
        <details class="group glass rounded-2xl border border-slate-700/80 p-4">
          <summary class="flex cursor-pointer items-center justify-between gap-3 text-sm font-medium text-slate-100">
            <span>Who owns the clone and the data?</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-slate-600/80 text-[0.7rem] text-slate-300 group-open:border-softgold group-open:text-softgold">+</span>
          </summary>
          <div class="mt-3 text-[0.9rem] text-slate-300">
            You own your voice model, avatar outputs and the structured brain file. Our agreements define usage rights, storage and deletion in clear language. If you decide to stop using the twin, you can request deletion of raw materials within defined timeframes.
          </div>
        </details>
        <details class="group glass rounded-2xl border border-slate-700/80 p-4">
          <summary class="flex cursor-pointer items-center justify-between gap-3 text-sm font-medium text-slate-100">
            <span>Can someone misuse my twin?</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-slate-600/80 text-[0.7rem] text-slate-300 group-open:border-softgold group-open:text-softgold">+</span>
          </summary>
          <div class="mt-3 text-[0.9rem] text-slate-300">
            Any powerful tool can be misused if access is not controlled. We design workflows that restrict who can generate content, introduce approvals and keep credentials out of public tools. You decide which team members are allowed to operate the twin.
          </div>
        </details>
        <details class="group glass rounded-2xl border border-slate-700/80 p-4">
          <summary class="flex cursor-pointer items-center justify-between gap-3 text-sm font-medium text-slate-100">
            <span>Do I need to be technical?</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-slate-600/80 text-[0.7rem] text-slate-300 group-open:border-softgold group-open:text-softgold">+</span>
          </summary>
          <div class="mt-3 text-[0.9rem] text-slate-300">
            No. The service is designed so that you never need to touch a configuration screen. Sessions feel like structured conversations. At the end, your team receives a simple playbook to operate the twin with clear steps.
          </div>
        </details>
        <details class="group glass rounded-2xl border border-slate-700/80 p-4">
          <summary class="flex cursor-pointer items-center justify-between gap-3 text-sm font-medium text-slate-100">
            <span>Can I update my twin later as my frameworks evolve?</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-slate-600/80 text-[0.7rem] text-slate-300 group-open:border-softgold group-open:text-softgold">+</span>
          </summary>
          <div class="mt-3 text-[0.9rem] text-slate-300">
            Yes. As your offers, markets and philosophies evolve, we can schedule update sessions to refresh your brain file and avatar outputs so the twin stays aligned with your current thinking.
          </div>
        </details>
        <details class="group glass rounded-2xl border border-slate-700/80 p-4">
          <summary class="flex cursor-pointer items-center justify-between gap-3 text-sm font-medium text-slate-100">
            <span>Do you only work in Dubai?</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-slate-600/80 text-[0.7rem] text-slate-300 group-open:border-softgold group-open:text-softgold">+</span>
          </summary>
          <div class="mt-3 text-[0.9rem] text-slate-300">
            Dubai and the wider UAE are the primary focus for now due to logistics and quality control. Select international engagements may be considered on a case by case basis where travel and privacy requirements can be met.
          </div>
        </details>
        <details class="group glass rounded-2xl border border-slate-700/80 p-4">
          <summary class="flex cursor-pointer items-center justify-between gap-3 text-sm font-medium text-slate-100">
            <span>What if I do not like the result?</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-slate-600/80 text-[0.7rem] text-slate-300 group-open:border-softgold group-open:text-softgold">+</span>
          </summary>
          <div class="mt-3 text-[0.9rem] text-slate-300">
            Calibration is built into day three. We test, adjust and refine the twin with you live. If something feels wrong, we correct it. The objective is not to push technology. It is to create an asset you are proud to use.
          </div>
        </details>
      </div>
    </section>

    <!-- Application / Waitlist -->
    <section id="apply" class="fade-section py-16">
      <div class="grid gap-10 lg:grid-cols-[minmax(0,1.1fr)_minmax(0,1fr)] lg:items-start">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.24em] text-softgold/80">Access</p>
          <h2 class="mt-2 text-2xl font-semibold text-slate-50 sm:text-3xl">
            Apply for your seventy two hour Digital AI Twin.
          </h2>
          <p class="mt-4 max-w-xl text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
            AIClone.ae works with a very limited number of clients. One client per seventy two hours by design. This keeps the experience focused, private and high quality. The form helps us understand whether the timing and fit are right on both sides.
          </p>
          <p class="mt-3 text-sm leading-relaxed text-slate-300 sm:text-[0.98rem]">
            After you submit, you receive a short screening message. If there is alignment, we schedule a fifteen minute call to walk through questions, logistics and potential dates for your seventy two hour block.
          </p>
        </div>
        <div id="waitlist" class="glass rounded-3xl border border-softgold/25 p-6 sm:p-7">
          <form action="#" method="post" class="space-y-4">
            <div class="grid gap-4 sm:grid-cols-2">
              <div>
                <label class="block text-xs font-medium uppercase tracking-[0.16em] text-slate-300 mb-1">Full name</label>
                <input type="text" name="name" required class="w-full rounded-xl border border-slate-700 bg-slate-950/70 px-3 py-2.5 text-sm text-slate-100 placeholder:text-slate-500 focus:border-softgold focus:outline-none" placeholder="Your name" />
              </div>
              <div>
                <label class="block text-xs font-medium uppercase tracking-[0.16em] text-slate-300 mb-1">Email</label>
                <input type="email" name="email" required class="w-full rounded-xl border border-slate-700 bg-slate-950/70 px-3 py-2.5 text-sm text-slate-100 placeholder:text-slate-500 focus:border-softgold focus:outline-none" placeholder="you@company.com" />
              </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
              <div>
                <label class="block text-xs font-medium uppercase tracking-[0.16em] text-slate-300 mb-1">WhatsApp (preferred in UAE)</label>
                <input type="tel" name="whatsapp" class="w-full rounded-xl border border-slate-700 bg-slate-950/70 px-3 py-2.5 text-sm text-slate-100 placeholder:text-slate-500 focus:border-softgold focus:outline-none" placeholder="+971..." />
              </div>
              <div>
                <label class="block text-xs font-medium uppercase tracking-[0.16em] text-slate-300 mb-1">Role</label>
                <input type="text" name="role" class="w-full rounded-xl border border-slate-700 bg-slate-950/70 px-3 py-2.5 text-sm text-slate-100 placeholder:text-slate-500 focus:border-softgold focus:outline-none" placeholder="Founder, CEO, coach..." />
              </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
              <div>
                <label class="block text-xs font-medium uppercase tracking-[0.16em] text-slate-300 mb-1">Company</label>
                <input type="text" name="company" class="w-full rounded-xl border border-slate-700 bg-slate-950/70 px-3 py-2.5 text-sm text-slate-100 placeholder:text-slate-500 focus:border-softgold focus:outline-none" placeholder="Company name" />
              </div>
              <div>
                <label class="block text-xs font-medium uppercase tracking-[0.16em] text-slate-300 mb-1">Website or LinkedIn</label>
                <input type="url" name="url" class="w-full rounded-xl border border-slate-700 bg-slate-950/70 px-3 py-2.5 text-sm text-slate-100 placeholder:text-slate-500 focus:border-softgold focus:outline-none" placeholder="https://..." />
              </div>
            </div>
            <div>
              <label class="block text-xs font-medium uppercase tracking-[0.16em] text-slate-300 mb-1">What best describes you</label>
              <select name="persona" class="w-full rounded-xl border border-slate-700 bg-slate-950/70 px-3 py-2.5 text-sm text-slate-100 focus:border-softgold focus:outline-none">
                <option>Founder or CEO</option>
                <option>Influencer or coach</option>
                <option>Real estate or elite sales</option>
                <option>Author, speaker or thought leader</option>
                <option>Other high trust role</option>
              </select>
            </div>
            <div>
              <label class="block text-xs font-medium uppercase tracking-[0.16em] text-slate-300 mb-1">Main reason for wanting a Digital AI Twin</label>
              <textarea name="reason" rows="3" class="w-full rounded-xl border border-slate-700 bg-slate-950/70 px-3 py-2.5 text-sm text-slate-100 placeholder:text-slate-500 focus:border-softgold focus:outline-none" placeholder="Share the key outcome you want to achieve."></textarea>
            </div>
            <div>
              <label class="block text-xs font-medium uppercase tracking-[0.16em] text-slate-300 mb-1">When would you like to start</label>
              <select name="timeline" class="w-full rounded-xl border border-slate-700 bg-slate-950/70 px-3 py-2.5 text-sm text-slate-100 focus:border-softgold focus:outline-none">
                <option>This month</option>
                <option>Next three months</option>
                <option>Exploring timing</option>
              </select>
            </div>
            <div class="flex items-start gap-2 text-[0.75rem] text-slate-400">
              <input id="consent" type="checkbox" required class="mt-0.5 h-3.5 w-3.5 rounded border border-slate-600 bg-slate-950/80 text-softgold focus:ring-softgold" />
              <label for="consent">
                I agree to be contacted regarding AIClone.ae and understand that my details are handled confidentially and will not be shared or sold.
              </label>
            </div>
            <button type="submit" class="mt-2 inline-flex w-full items-center justify-center rounded-full bg-softgold px-5 py-3 text-xs font-semibold uppercase tracking-[0.22em] text-obsidian shadow-glow-gold hover:bg-amber-300">
              Submit application
            </button>
            <p class="pt-2 text-center text-[0.75rem] text-slate-400">
              If the timing or fit is not right, we will say so openly. Slots remain limited by design.
            </p>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="border-t border-slate-800/80 bg-obsidian/95">
    <div class="mx-auto flex max-w-6xl flex-col gap-8 px-4 py-10 text-sm text-slate-300 lg:flex-row lg:justify-between lg:px-6">
      <div class="max-w-sm">
        <p class="text-sm font-semibold tracking-[0.18em] text-softgold uppercase">
          AIClone.ae
        </p>
        <p class="mt-2 text-[0.9rem] text-slate-400">
          Seventy two hour Digital AI Twins for Dubai founders, CEOs and high value personal brands. One client at a time. White glove, human led, AI powered.
        </p>
      </div>
      <div class="grid flex-1 gap-6 sm:grid-cols-3 lg:gap-10">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Navigation</p>
          <ul class="mt-3 space-y-1.5 text-[0.9rem]">
            <li><a href="#top" class="hover:text-softgold">Home</a></li>
            <li><a href="#process" class="hover:text-softgold">Seventy two hour Digital AI Twin</a></li>
            <li><a href="#faq" class="hover:text-softgold">FAQ</a></li>
            <li><a href="#apply" class="hover:text-softgold">Apply</a></li>
          </ul>
        </div>
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Trust</p>
          <ul class="mt-3 space-y-1.5 text-[0.9rem]">
            <li><a href="#ethics" class="hover:text-softgold">Confidentiality and data handling</a></li>
            <li><span class="text-slate-500">Avatar rights and usage (coming soon)</span></li>
            <li><span class="text-slate-500">Terms of service (coming soon)</span></li>
          </ul>
        </div>
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Contact</p>
          <ul class="mt-3 space-y-1.5 text-[0.9rem]">
            <li><span class="text-slate-400">Email: info@aiclone.ae</span></li>
            <li><span class="text-slate-400">Dubai, United Arab Emirates</span></li>
            <li><span class="text-slate-500">LinkedIn: David Potgieter</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="border-t border-slate-800/80">
      <div class="mx-auto flex max-w-6xl flex-col gap-3 px-4 py-4 text-[0.8rem] text-slate-500 sm:flex-row sm:items-center sm:justify-between lg:px-6">
        <p>© <span id="year"></span> AIClone.ae. All rights reserved.</p>
        <p>Built in Dubai for leaders who value time, legacy and leverage.</p>
      </div>
    </div>
  </footer>

  <!-- Simple JS for animations and mobile menu -->
  <script>
    // Mobile menu toggle
    const toggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    if (toggle && mobileMenu) {
      toggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    }

    // Scroll reveal for sections
    const observer = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15 }
    );

    document.querySelectorAll('.fade-section').forEach(section => {
      observer.observe(section);
    });

    // Current year
    const yearEl = document.getElementById('year');
    if (yearEl) {
      yearEl.textContent = new Date().getFullYear();
    }
  </script>
</body>
</html>

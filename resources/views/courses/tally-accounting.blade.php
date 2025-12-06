<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tally & Accounting Course - RR Institute</title>
    <meta name="description" content="Become an accounting professional with our Tally & Accounting course. Learn GST, taxation, and financial management.">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans">
    
    <x-announcement-bar />
    <x-navbar />

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 md:pt-40 md:pb-32 bg-blue-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-100 text-blue-700 text-sm font-semibold mb-6 tracking-wide uppercase">Professional Course</span>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Expertise in <span class="text-blue-600">Tally & Accounting</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Master the art of financial accounting. Learn Tally Prime with GST and open doors to a career in finance and taxation.
                </p>
            </div>
        </div>
    </div>

    <!-- Course Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Course Overview</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        This course is designed to provide comprehensive knowledge of accounting principles and practical skills in Tally Prime. You will learn how to manage accounts, inventory, payroll, and taxation efficiently.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Manual Accounting Fundamentals</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Tally Prime Software Training</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">GST (Goods & Services Tax) Implementation</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Payroll Management & Banking</span>
                        </li>
                    </ul>
                </div>
                <div class="order-1 md:order-2">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80" alt="Accounting" class="rounded-2xl shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Course Curriculum</h2>
            <div class="space-y-6">
                <!-- Module 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-blue-700 mb-3">Module 1: Basics of Accounting</h3>
                    <p class="text-gray-600">Accounting concepts, golden rules of accounting, journal entries, ledger posting, and trial balance.</p>
                </div>
                <!-- Module 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-blue-700 mb-3">Module 2: Introduction to Tally Prime</h3>
                    <p class="text-gray-600">Company creation, ledger creation, voucher entry, and inventory management.</p>
                </div>
                <!-- Module 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-blue-700 mb-3">Module 3: Taxation (GST & TDS)</h3>
                    <p class="text-gray-600">Understanding GST, GST registration, recording GST transactions, GST returns, and TDS calculation.</p>
                </div>
                <!-- Module 4 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-blue-700 mb-3">Module 4: Payroll & Banking</h3>
                    <p class="text-gray-600">Employee database, salary processing, payslip generation, and bank reconciliation.</p>
                </div>
                <!-- Module 5 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-blue-700 mb-3">Module 5: Finalization of Accounts</h3>
                    <p class="text-gray-600">Balance sheet, profit & loss account, cash flow statement, and year-end process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-blue-600 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">Become a Certified Accountant</h2>
            <p class="text-xl mb-8 text-blue-100">Get job-ready skills with our advanced Tally & Accounting training.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-700 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors">Enroll Now</a>
        </div>
    </section>

    <x-footer />
    <x-whatsapp-float />
</body>
</html>

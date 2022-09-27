@extends('layouts.app')
@section('title', 'Cisco Certification Track')
@section('content')
<div class="min-h-30vh p-10 items-start flex flex-col justify-center"
    style="background-image:url({{ asset('images/cover/cisco-certifications-track.jpg')}});">
    <div class="mx-auto container">
        <h1 class="text-white uppercase text-3xl">Cisco certifications track</h1>
        <br>
        <span class="text-white text-2xl">Cisco Certifications are industry's best known certifications</span>
    </div>
</div>
<div class="container mx-auto">
    <div class="min-h-30vh p-10">
        <h2>Cisco Certifications – 2020 Updated<h2>
                <p>
                    Since Feb 2020, Cisco has launched a brandnew certification track. Learn more about the
                    <a href="#" class="font-bold text-secondary hover:text-secondary-300">New changes to the Cisco
                        Certification and Training Program.</a>
                </p>
                <p>
                    As the networks are growing, Cisco is responding to all the new evolving technologies by address the
                    shortage in
                    skillsgap. New skills are required for both network engineers and software developers as networks
                    become
                    more
                    intuitive, automated and intent based.
                </p>
                <ul>
                    <li>
                        A newly updated CCNA training and certification which replaces all the previous technology
                        relevant
                        CCNAs. There
                        is one basic CCNA which would consider to be the building block for all the Cisco
                        Certifications.
                    </li>
                    <li>
                        Cisco has devided into 5 core technology tracks and associated training for CCNP and CCIE
                        certifications.
                    </li>
                    <li>
                        A new exam during CCNA track would lead to a Cisco Specialist Certifications.
                        Continuing education extended to the CCNA and CCNP Certification levels.
                    </li>
                </ul>
                <p>
                    First-of-its kind DevNet training with associate, specialist and professional certifications
                    At Insoft Services, you would get trained with the world’s most trusted Authorised Cisco Learning
                    Partner. Our
                    courses include hands-on and virtual practice labs featuring the latest Cisco equipment in
                    real-world
                    scenarios
                    to help you prepare for actual networking environments and Cisco certification exams.
                </p>
                <p>
                    Our instructors have the most extensive networking experience in the industry and collectively hold
                    more
                    CCIEs
                    and CCSIs than any other training provider.
                </p>

    </div>
    <div class="flex flex-col">
        <!-- TODO: modularize courses as blade components so cert track can be updated from backend -->
        <div class="text-primary-700 bg-blue-100 p-2 font-bold w-full text-xl text-center uppercase mb-3">
            <h2>Certifications track</h2>
        </div>
        <div class="flex text-blue-100 bg-secondary-600 h-10 items-center justify-center font-semibold uppercase">
            <h3>Associate</h3>
        </div>
        <div class="lg:grid lg:grid-cols-7 lg:gap-1">
            <div class="p-3 border-b hover:bg-secondary-200 bg-secondary-300 h-full">
                <h5 class="font-bold text-primary-700"><a
                        href="https://www.insoftservices.uk/courses/ccna-implementing-and-administering-cisco-solutions/">CCNA</a>
                </h5>
                <p class="text-sm">Implementing and
                    Administering
                    Cisco Solutions
                    <br>
                    <span class="italic text-primary-500">5 Days & 200-301 CCNA</span>
                </p>
            </div>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
            <div class="p-3 border-b hover:bg-secondary-200 bg-secondary-300">
                <h5 class="font-bold text-primary-700"><a
                        href="https://www.insoftservices.uk/courses/secfnd-1-0-understanding-cisco-cybersecurity-fundamentals/">CBROPS</a>
                </h5>
                <p class="text-sm">
                    Understanding Cisco
                    Cybersecurity Operations
                    Fundamentals
                    <br><span class="text-sm italic text-primary-500">5 Days & 200-201 CBROPS</span>
                </p>
            </div>
            <div class="p-3 border-b hover:bg-secondary-200 bg-secondary-300">
                <h5 class="font-bold text-primary-700"><a
                        href="https://www.insoftservices.uk/courses/devasc-developing-applications-and-automating-workflows-using-cisco-core-platforms/">DEVASC</a>
                </h5>
                <p class="text-sm">
                    Developing Applications and
                    Automating Workflows using
                    Cisco Platforms
                    <br><span class="text-sm italic text-primary-500">5 Days & 200-901 DEVASC</span>
                </p>
            </div>
        </div>

        <div class="flex bg-tertiary-600 text-white items-center justify-center h-10">
            <h3 class="font-semibold uppercase text-center">Specialist</h3>


        </div>

        <!-- TODO: REWORK toggle menus with scripting/vuejs -->
        <div class="lg:grid lg:grid-cols-7 lg:gap-1">
            <div class="">

                <h4 class="bg-tertiary-500 hover:bg-tertiary-400 hover:text-primary-800
                text-blue-100 hover:shadow-lg text-center min-h-16  p-2 font-semibold">
                    Enterprise concentration
                </h4>
                <div id="enterprise">
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a class="hover:text-secondary-700"
                                href="https://www.insoftservices.uk/courses/enarsi-implementing-cisco-enterprise-advanced-routing-and-services/">ENARSI</a>
                        </h5>
                        <p class="text-sm">
                            Implementing Cisco Enterprise
                            Advanced Routing and Services
                            <br><span class="italic">5 Days & 300-410 ENARSI</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a class="hover:text-secondary-700"
                                href="https://www.insoftservices.uk/courses/sdwan300-implementing-cisco-sd-wan-solutions/">SDWAN300</a>
                        </h5>
                        <p class="text-sm">
                            Implementing Cisco
                            SD-WAN Solutions
                            <br><span class="italic">4 Days & 300-415 ENSDWI</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a class="hover:text-secondary-700"
                                href="https://www.insoftservices.uk/courses/ensld-designing-cisco-enterprise-networks/">ENSLD</a>
                        </h5>
                        <p class="text-sm">
                            Designing Cisco
                            Enterprise Networks
                            <br><span class="italic">5 Days & 300-420 ENSLD</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a class="hover:text-secondary-700"
                                href="https://www.insoftservices.uk/courses/enwlsd-designing-cisco-enterprise-wireless-networks/">ENWLSD</a>
                        </h5>
                        <p class="text-sm">
                            Designing Cisco Enterprise
                            Wireless Networks
                            <br><span class="italic">5 Days & 300-425 ENWLSD</span>
                        </p>
                    </div>

                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a class="hover:text-secondary-700"
                                href="https://www.insoftservices.uk/courses/enwlsi-implementing-cisco-enterprise-wireless-networks/">ENWLSI</a>
                        </h5>
                        <p class="text-sm">
                            Implementing Cisco Enterprise
                            Wireless Networks
                            <br><span class="italic">5 Days & 300-430 ENWLSI</span>
                        </p>
                    </div>

                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a class="hover:text-secondary-700"
                                href="https://www.insoftservices.uk/courses/enaui-implementing-automation-for-cisco-enterprise-solutions/">ENAUI</a>
                        </h5>
                        <p class="text-sm">
                            Implementing Automation
                            for Cisco
                            Enterprise Solutions
                            <br><span class="italic">3 Days & 300-435 ENAUTO</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <a href="#security">
                    <h4 class="bg-tertiary-500 hover:bg-tertiary-400 hover:text-primary-800
                        text-blue-100 hover:shadow-lg text-center min-h-16  p-2 font-semibold">
                        Security concentration
                    </h4>
                </a>
                <div id="security">
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a
                                href="https://www.insoftservices.uk/courses/ssngfw-securing-networks-with-cisco-firepower-next-generation-firewall/">SSNGFW</a>
                        </h5>
                        <p class="text-sm">Securing Networks
                            with Cisco Firepower Next
                            Generation Firewall
                            <br><span class="italic">5 Days & 300-710 SNCF</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-bold"><a
                                href="https://www.insoftservices.uk/courses/ssfips-securing-networks-with-cisco-firepower-next-generation-ips/">SSFIPS</a>
                        </h5>
                        <p class="text-sm">Securing Networks
                            with Cisco Firepower
                            Next Generation IPS
                            <br>
                            <span class="italic">5 Days & 300-710 SNCF</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a
                                href="https://www.insoftservices.uk/courses/sise-3-0-implementing-and-configuring-cisco-identity-services-engine/">SISE</a>
                        </h5>
                        <p class="text-sm">Implementing
                            and Configuring
                            Cisco Identity
                            Services Engine
                            <br><span class="italic">5 Days & 300-715 SISE</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a
                                href="https://www.insoftservices.uk/courses/securing-email-with-cisco-email-security-appliance-sesa-3-0/">SESA</a>
                        </h5>
                        <p class="text-sm">Securing Email
                            with Cisco Email Security
                            Appliances
                            <br><span class="italic">3 Days & 300-720 SESA</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a
                                href="https://www.insoftservices.uk/courses/swsa-securing-the-web-with-cisco-web-security-appliance/">SWSA</a>
                        </h5>
                        <p class="text-sm">Securing the Web
                            with Cisco Web
                            Security Appliance
                            <br><span class="italic">2 Days & 300-725 SWSA</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a
                                href="https://www.insoftservices.uk/courses/svpn-implementing-secure-solutions-with-virtual-private-networks/">SVPN</a>
                        </h5>
                        <p class="text-sm">Implementing Secure Solutions
                            with
                            Virtual Private Networks
                            <br><span class="italic">5 Days & 300-730 SVPN</span>
                        </p>
                    </div>

                    <div class="p-3 bottom-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a href="#SAUI">SAUI</a></h5>
                        <p class="text-sm">Implementing Automation
                            for Cisco
                            Security Solutions
                            <br><span class="italic">3 Days & 300-735 SAUTO</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <h4 class="bg-tertiary-500 hover:bg-tertiary-400 hover:text-primary-800
                 text-blue-100 hover:shadow-lg text-center min-h-16  p-2 font-semibold">
                    Collaboration
                    concentration</h4>
                <div id="collaboration">
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a
                                href="https://www.insoftservices.uk/courses/clica-implementing-cisco-collaboration-applications/">CLICA</a>
                        </h5>
                        <p class="text-sm">
                            Implementing Cisco
                            Collaboration
                            Applications
                            <br><span class="italic">5 Days & 300-810 CLICA</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a
                                href="https://www.insoftservices.uk/courses/claccm-implementing-cisco-advanced-call-control-and-mobility-services/">CLACCM</a>
                        </h5>
                        <p class="text-sm">
                            Implementing
                            Cisco Advanced Call Control
                            and
                            Mobility Services
                            <br><span class="italic">5 Days & 300-815 CLACCM</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a
                                href="https://www.insoftservices.uk/courses/clcei-implementing-cisco-collaboration-cloud-and-edge-solutions/">CLCEI</a>
                        </h5>
                        <p class="text-sm">
                            Implementing Cisco
                            Collaboration Cloud
                            and Edge Solutions
                            <br><span class="italic">5 Days & 300-820 CLCEI</span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold"><a
                                href="https://www.insoftservices.uk/courses/claui-implementing-automation-for-cisco-collaboration-solutions/">CLAUI</a>
                        </h5>
                        <p class="text-sm">
                            Implementing Automation
                            for Cisco
                            Collaboration Solutions
                            <br><span class="italic">3 Days & 300-835 CLAUTO</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <h4 class="bg-tertiary-500 hover:bg-tertiary-400 hover:text-primary-800
                 text-blue-100 hover:shadow-lg text-center min-h-16  p-2 font-semibold">
                    Service Provider concentration
                </h4>
                <div id="service-provider">
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a
                                href="https://www.insoftservices.uk/courses/spri-implementing-cisco-service-provider-advanced-routing-solutions/">
                                SPRI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Cisco Service Provider
                            Advanced Routing Solutions
                            <br>
                            <span class="italic">
                                5 Days & 300-510 SPRI
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a
                                href="https://www.insoftservices.uk/courses/svpi-implementing-cisco-service-provider-vpn-services/">
                                SPVI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Cisco Service Provider VPN Services
                            <br>
                            <span class="italic">
                                5 Days & 300-515 SPVI
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                SPAUI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Automation for Cisco Service Provider Solutions
                            <br>
                            <span class="italic">
                                3 Days & 300-535 SPAUTO
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <h4 class="bg-tertiary-500 hover:bg-tertiary-400 hover:text-primary-800 text-blue-100 hover:shadow-lg
                text-center min-h-16  p-2 font-semibold">
                    Data Center
                    concentration
                </h4>
                <div id="data-center">
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                DCID
                            </a>
                        </h5>
                        <p class="text-sm">
                            Designing Cisco Data Center Infrastructure
                            <br>
                            <span class="italic">
                                5 Days & 300-610 DCID
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                DCIT
                            </a>
                        </h5>
                        <p class="text-sm">
                            Troubleshooting Cisco Data Center Infrastructure
                            <br>
                            <span class="italic">
                                5 Days & 300-615 DCIT
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                DCACI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Cisco Application Centric Infrastructure
                            <br>
                            <span class="italic">
                                5 Days & 300-620 DCACI
                            </span>
                        </p>
                    </div>

                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                DCMDS
                            </a>
                        </h5>
                        <p class="text-sm">
                            Configuring Cisco MDS 9000 Switches

                            <br>
                            <span class="italic">
                                4 Days & 300-625 DCSAN
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                DCAUI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Automation for Cisco Data Center Solutions
                            <br>
                            <span class="italic">
                                3 Days & 300-635 DCAUTO
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                DCACIA
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Cisco Application Centric Infrastructure - Advanced
                            <br>
                            <span class="italic">
                                5 Days & 600-660 DCACIA
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <h4 class="bg-tertiary-500 hover:bg-tertiary-400 hover:text-primary-800 text-blue-100 hover:shadow-lg
                 text-center min-h-16  p-2 font-semibold">
                    CyberOps
                    concentration</h4>
                <div id="cyberops">
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a
                                href="https://www.cisco.com/c/en/us/training-events/training-certifications/exams/current-list/300-215-cbrfir.html">
                                CBRFIR
                            </a>
                        </h5>
                        <p class="text-sm">
                            Conducting Forensic Analysis and Incident Response Using Cisco Technologies for CyberOps
                            <br>
                            <span class="italic">
                                5 Days & 300-210 CBRFIR
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <h4 class="bg-tertiary-500 hover:bg-tertiary-400 hover:text-primary-800 text-blue-100 hover:shadow-lg
                 text-center min-h-16  p-2 font-semibold">
                    DevNet concentration
                </h4>
                <div id="devnet">
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                C-DEVOPS
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing DevOps Solutions and Practices using Cisco Platforms
                            <br>
                            <span class="italic">
                                5 Days & 300-910 DEVOPS
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                DEVIOT
                            </a>
                        </h5>
                        <p class="text-sm">
                            Developing Solutions using Cisco IoT & Edge Platforms
                            <br>
                            <span class="italic">
                                5 Days & 300-915 DEVIOT
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                DEVWBX
                            </a>
                        </h5>
                        <p class="text-sm">
                            Developing Applications for Cisco Webex and Webex Devices
                            <br>
                            <span class="italic">
                                5 Days & 300-920 DEVWBX
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                ENAUI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Automation for Cisco Enterprise Solutions
                            <br>
                            <span class="italic">
                                3 Days & 300-435 ENAUTO
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                SPAUI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Automation for Cisco Service Provider Solutions
                            <br>
                            <span class="italic">
                                3 Days & 300-535 SPAUTO
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                DCAUI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Automation for Cisco Data Center Solutions
                            <br>
                            <span class="italic">
                                3 Days & 300-635 DCAUTO
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                SAUI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Automation for Cisco Security Solutions
                            <br>
                            <span class="italic">
                                3 Days & 300-735 SAUTO
                            </span>
                        </p>
                    </div>
                    <div class="p-3 border-b bg-tertiary-300 hover:bg-tertiary-200">
                        <h5 class="font-semibold">
                            <a href="">
                                CLAUI
                            </a>
                        </h5>
                        <p class="text-sm">
                            Implementing Automation for Cisco Collaboration Solutions
                            <br>
                            <span class="italic">
                                3 Days & 300-835 CLAUTO
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex bg-quartary-600 text-white items-center justify-center h-10">
            <h3 class="font-semibold uppercase">Professional</h3>
        </div>
        <div class="flex text-white bg-quartary-400 justify-center items-center h-8">
            <h4>Requires +1 Specialist certification</h4>
        </div>
        <div class="lg:grid lg:grid-cols-7 lg:gap-1">
            <div class="">
                <div class="p-3 border-b hover:bg-quartary-200 bg-quartary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            ENCOR
                        </a>
                    </h5>
                    <p class="text-sm">
                        Implementing and Operating Cisco Enterprise Network Core Technologies

                        <br>
                        <span class="italic">
                            5 Days & 350-401 ENCOR
                        </span>
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-quartary-200 bg-quartary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            SCOR
                        </a>
                    </h5>
                    <p class="text-sm">
                        Implementing and Operating Cisco Security Core Technologies
                        <br>
                        <span class="italic">
                            5 Days & 350-701 SCOR
                        </span>
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-quartary-200 bg-quartary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            CLCOR
                        </a>
                    </h5>
                    <p class="text-sm">
                        Implementing and Operating Cisco Collaboration Core Technologies
                        <br>
                        <span class="italic">
                            5 Days & 350-801 CLCOR
                        </span>
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-quartary-200 bg-quartary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            SPCOR
                        </a>
                    </h5>
                    <p class="text-sm">
                        Implementing and Operating Cisco Service Provider Network Core Technologies

                        <br>
                        <span class="italic">
                            5 Days & 350-501 SPCOR
                        </span>
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-quartary-200 bg-quartary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            DCCOR
                        </a>
                    </h5>
                    <p class="text-sm">
                        Implementing and Operating Cisco Data Center Core technologies
                        <br>
                        <span class="italic">
                            5 Days & 350-601 DCCOR
                        </span>
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-quartary-200 bg-quartary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            CBRCOR
                        </a>
                    </h5>
                    <p class="text-sm">
                        Performing CyberOps Using Cisco Security Technologies
                        <br>
                        <span class="italic">
                            5 Days & 350-201 CBRCOR
                        </span>
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-quartary-200 bg-quartary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            DEVCOR
                        </a>
                    </h5>
                    <p class="text-sm">
                        Developing Applications using Cisco Platforms and APIs
                        <br>
                        <span class="italic">
                            5 Days & 350-901 DEVCOR
                        </span>
                    </p>
                </div>
            </div>

        </div>
        <div class="flex bg-primary-600 text-white items-center justify-center h-10">
            <h3 class="font-semibold uppercase text-center">Expert</h3>
        </div>
        <div class="lg:grid lg:grid-cols-7 lg:gap-1">
            <div class="">
                <div class="p-3 border-b hover:bg-primary-200 bg-primary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            CCIE Enterprise
                        </a>
                    </h5>
                    <p class="text-sm">
                        Infrastructure or
                        <br>
                        Wireless Lab Exam
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-primary-200 bg-primary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            CCIE Security
                        </a>
                    </h5>
                    <p class="text-sm">
                        Lab Exam
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-primary-200 bg-primary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            CCIE Collaboration
                        </a>
                    </h5>
                    <p class="text-sm">
                        Lab exam
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-primary-200 bg-primary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            CCIE Service Provider
                        </a>
                    </h5>
                    <p class="text-sm">
                        Lab exam
                    </p>
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-primary-200 bg-primary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            CCIE Data Center
                        </a>
                    </h5>
                    <p class="text-sm">
                        Lab exam
                    </p>
                </div>
            </div>

            <div class="">
                <div class="p-3 border-b bg-primary-300 h-full">
                </div>
            </div>
            <div class="">
                <div class="p-3 border-b hover:bg-primary-200 bg-primary-300 h-full">
                    <h5 class="font-semibold">
                        <a href="">
                            CCIE DevNet
                        </a>
                    </h5>
                    <p class="text-sm">
                        Lab exam
                    </p>
                </div>
            </div>

        </div>


        <div class="lg:grid lg:gap-6 lg:grid-cols-2 py-10 px-5 text-white">
            <div class="bg-secondary-600 p-10 md:min-h-280 shadow-lg rounded-lg">
                <h4 class="font-bold text-xl mb-5">Associate</h4>
                <p>
                    The Associate level of Cisco Certifications can begin directly with CCNA for network installation,
                    operations and troubleshooting or CCDA for network design. Think of the Associate Level as
                    the foundation level of networking certification.
                </p>
            </div>
            <div class="bg-tertiary-600 p-10 md:min-h-280 shadow-lg rounded-lg">
                <h4 class="font-bold text-xl mb-5">Specialist</h4>
                <p>
                    You can achieve Specialist level certificate status by passing one concentration course
                    in 7 different categories: Enterprise, Security, Collaboration,
                    Service Provider, Data Center, CyberOps and DevNet.
                </p>
            </div>
            <div class="bg-quartary-600 p-10 md:min-h-280 shadow-lg rounded-lg">
                <h4 class="font-bold text-xl mb-5">Professional</h4>
                <p>
                    The Professional level (CCNP) is an advanced level of certification that shows more expertise
                    with networking skills. Each certification covers a different technology to meet the needs of
                    varying job roles.
                </p>
            </div>
            <div class="bg-primary-600 p-10 md:min-h-280 shadow-lg rounded-lg">
                <h4 class="font-bold text-xl mb-5">Expert</h4>
                <p>
                    The Cisco Certified Internetwork Expert (CCIE) certification is accepted worldwide as
                    the most prestigious networking certification in the industry. To achieve Expert level
                    status you need to be extremely knowledgeable regarding the subject and have multiple
                    years of experience.
                </p>
            </div>
        </div>
    </div>
</div>
<!--end container-->
@endsection
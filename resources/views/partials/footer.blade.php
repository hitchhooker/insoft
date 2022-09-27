<!-- Footer -->

<footer class="font-sans bg-primary-600 text-white py-8 px-0 md:px-4">
  <div class="mx-auto sm:w-10/12 md:w-8/12 lg:w-11/12 container overflow-hidden flex flex-col lg:flex-row">
    <a href="/" class="block w-full lg:w-5/12">
      <img src="{{asset('images/logos/Insoft-Logo-Inverse.svg')}}" class="w-48" alt="logo">
    </a>
    <div class="w-full lg:w-7/12 flex text-sm mt-6 lg:mt-0">
      <ul class="text-primary-200 list-none p-0 font-thin flex flex-col text-left px-3">
        <li class="inline-block py-2 text-white uppercase no-underline font-medium tracking-wide">Training</li>
        <li>
          <a href="{{ route('cisco-certification-track') }}" alt="Cisco Certification track"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Cisco</a>
        </li>
        <li>
          <a href="{{ route('fortinet-training') }}" alt="Fortinet Training"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Fortinet</a>
        </li>
        <li>
          <a href="#" alt="Microsoft Training"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Microsoft</a>
        </li>
        <li>
          <a href="{{ route('iapp-certifications-courses-training') }}" alt="IAPP / GPDR"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">IAPP</a>
        </li>
        <li>
          <a href="#" alt="Course Schedule"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Schedule</a>
        </li>
      </ul>
      <ul class="text-primary-200 list-none p-0 font-thin flex flex-col text-left px-3">
        <li class="inline-block py-2 text-white uppercase no-underline font-medium tracking-wide">Company</li>
        <li>
          <a href="#" alt="Press Release"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Press Release
          </a>
        </li>
        <li>
          <a href="{{ route('instructors') }}" alt="Instructors"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Instructors
          </a>
        </li>
        <li><a href="{{ route('about') }}" alt="About us"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Team</a>
        </li>
        <li>
          <a href="#" alt="Careers"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Careers
          </a>
        </li>
      </ul>
      <ul class="text-primary-200 list-none p-0 font-thin flex flex-col text-left px-3">
        <li class="inline-block py-2 text-white uppercase no-underline font-medium tracking-wide">Info</li>
        <li>
          <a href="#" alt="Blog"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Blog</a>
        </li>
        <li>
          <a href="{{ route('contact') }}" alt="Contact us"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Contact us</a>
        </li>
        <li>
          <a href="#" alt="Newsletter"
            class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Newsletter</a>
        </li>
        <li>
          <a href="{{ route('privacy-policy') }}" class="inline-block py-2 text-gray-200 hover:text-secondary-400 no-underline">Privacy
            Policy</a>
        </li>
      </ul>
      <div class="text-primary-200 px-3">
        <!-- TODO: spacing between icons -->
        <div class="inline-block py-2 text-white uppercase font-medium tracking-wide">Follow Us</div>
        <div class="flex flex-wrap">
          <a class="flex flex-1 items-center text-white hover:text-blue-600 m-1 no-underline"
            href="https://www.facebook.com/insoftservicesuk/" alt="Facebook"><i class="fab fa-facebook fa-2x"></i></a>
          <a class="flex flex-1 items-center text-white hover:text-info m-1 no-underline"
            href="https://twitter.com/InsoftServices" alt="Twitter"><i class="fab fa-twitter fa-2x"></i></a>
          <a class="flex flex-1 items-center text-white hover:text-blue-400 m-1 no-underline"
            href="https://www.linkedin.com/company/insoftservices/" alt="LinkedIn"><i
              class="fab fa-linkedin fa-2x"></i></a>
          <a class="flex flex-1 items-center text-white hover:text-orange-700 m-1 no-underline"
            href="https://www.instagram.com/insoftservices/" alt="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
          <a class="flex flex-1 items-center text-white hover:text-red-700 m-1 no-underline"
            href="https://www.youtube.com/user/alykhanuk/" alt="Youtube"><i class="fab fa-youtube fa-2x"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!--TODO: fix footer of the footer -->
  <div
    class="pt-4 mt-4 text-primary-200 border-t border-primary-700 text-center flex flex-col md:flex-row justify-center">
    <p class="m-2">©2020 Insoft Services</p>
    <a href="#" class="m-2 hover:text-secondary">Terms & Conditions</a>
    <a href="#" class="m-2 hover:text-secondary">Sitemap</a>
  </div>

</footer>

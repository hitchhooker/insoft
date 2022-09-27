@extends('layouts.app')
@section('title', 'Instructors') 
@section('content')

<div class="bg-center flex flex-wrap content-center w-full min-h-40vh text-blue-100"
 style="background-image:url({{asset('images/cover/insoft-services-instructors-1.png')}})">
	<div class="text-center container mx-auto">
		<h3 class="flex-1 uppercase text-2xl">Award-Winning</h3>
		<h2 class="flex-1 align-middle text-4xl -mt-4">
			IT Subject Matter Experts
		</h2>
	</div>
</div>

<div class="container mx-auto">
	<div class="lg:flex lg:flex-row">
		<div class="lg:w-5/12">
			<p class="text-3xl px-8 lg:px-20 py-24 lg:py-48 text-center">
				Insoft Learning team of instructors consists of world-class experts who
				also work as field engineers on a daily basis.
			</p>
		</div>
		<div class="lg:p-16 p-8 text-lg lg:w-7/12">
			<p>
				Our Instructors are engaged in real-life projects and gain hands-on
				technical experience while working with Insoft's major customers in USA,
				Europe, Middle East, and Africa. Each of them holds a variety of
				certifications from different vendors including 20 CCIEs on the team.
			</p>
			<p>
				Our highly specialised team of Cisco engineers/instructors gives you the
				knowledge and skills that accelerate the development of your workplace
				competencies. You will gain direct benefits from our theoretical
				expertise and practical experiences. Most public classes are delivered
				in English, but for some in-house training projects, we can cover a
				number of additional languages depending on the technology.
			</p>
			<p>
				The Instructor Excellence Award recognises outstanding CCSIs from each
				region who aspire to be the best in their field of technical expertise.
				The award winners demonstrate the highest quality training experience
				and best overall performance as measured by the student satisfaction
				surveys for each Fiscal Year. We rely upon our elite instructors to
				constantly deliver first class training experiences which they
				invariably do.
			</p>
		</div>
	</div>
</div>
<!--------------------------------Instructor cards----------------------------------------------->
<div class="container mx-auto">
	<h3 class="text-3xl text-center p-5 lg:p-10">
		An elite team of Subject Matter Experts
	</h3>
	<!-- TODO: write instructor cards as blade components-->
	<div class="flex flex-wrap justify-evenly p-5">
		<div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
			<img class="w-full" src="{{ asset('images/instructors/Laurent-Metzger.png') }}" 
			alt="Instructor Laurent Metzger" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Laurent</div>
				<p class="text-gray-700 text-base">
					Laurent is an expert in Routing & Switching, SAN Switching and
					Datacenter Architecture (3 xCCIE/CCDE). He has 17 years of experience
					in international corporate environments designing and implementing ICT
					Architectures in Holland, Spain and Switzerland. Laurent is an
					experienced Consultant with a 360&deg; approach, from technical to
					business and a keen eye on the newest trends such as Virtualization,
					SDN, Cloud, PaaS, SaaS, IoT, Big Data and masters the Internet
					Infrastructure opportunities in the industry 4.0. Higher level
					education: Engineer diploma from one of the top-20 French public
					schools of Engineering.
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					German
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					French
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Spanish
				</span>
			</div>
		</div>

		<div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
			<img class="w-full" src="{{ asset('images/instructors/Raul-Urban-3.jpg') }}"
			 alt="Instructor Raul Urban" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Raul</div>
				<p class="text-gray-700 text-base">
					Raul has more than 15 years of telecom and network experience, he has
					worked in 9 different countries in Europe, West-Central Africa, Middle
					East and South-East Asia, both in private and military sectors.
					<br />
					He has extensive background in cellular networks, satellite
					communications and data centers. In recent years he's been
					specifically concentrating on network security.
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Estonian
				</span>
			</div>
		</div>

		<div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
			<img class="w-full" src="{{ asset('images/instructors/Jorge-Carrillo-photo.png') }}" alt="Instructor Jorge Carrillo" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Jorge</div>
				<p class="text-gray-700 text-base">
					Jorge, PhD, has over 15 years of experience in cybersecurity and data
					protection across multiple sectors in Europe as a Security and
					Compliance Professional. After obtaining his PhD in Informatics, he
					has been delivering professional training on Information Security,
					software development and project management methodologies to different
					universities and professional organisations across Europe.
					<br />
					He is an active learner and possess all IAPP certifications (CIPP/E,
					CIPM, CIPP/US, CIPP/G, CIPP/G, CIPT, CIPP/C, FIP), CISSP, PRINCE2,
					PMP, PCI, Certified DPO, GDPR-P and other technical certifications
					with a focus on User Experience and Product Development.
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Spanish
				</span>
			</div>
		</div>

		<div class="w-full sm:w-6/12 lg:w-4/12 max-w-sm my-5 rounded overflow-hidden shadow-lg bg-white">
			<img class="w-full" src="{{ asset('images/instructors/Mohamad-Kalash-photo.png') }}" 
			alt="Instructor Mohamad Kalash" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Mohamad</div>
				<p class="text-gray-700 text-base">
					Mohamad is specialised in cybersecurity Education and Consultancy. He
					started his career in 1992 and became an authorised trainer for Cisco
					(CCSI), Microsoft (MCT), and LPI (Linux) and others to use and teach
					their various business and technical solutions. He holds Professional
					certifications from different vendors as follows:
					<br />
					Cisco: CCNA Routing & Switching, CCNP Routing & Switching, CCDA, CCDP,
					CCNA Wireless, CCNA Voice, CCNA Security, CCNP Security...
					<br />
					Microsoft: MCSA, MCSE (for Windows Server Editions 2000, 2003, 2008,
					2012 and 2016)
					<br />
					LPI: LPIC1, LPIC2, LPIC3 Security
					<br />
					CompTIA: A+, Network+, Security+
					<br />
					ISACA: CISM
					<br />
					EC-Council: CEHv9
					<br />
					ICSI: CPTA, CPT, CDFE, CWePT, CWiPT
					<br />
					<br />
					His passion nowadays is to enhance the knowledge of the millennial
					generation about two fields: Entrepreneurship and End User
					cybersecurity Education.
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Arabic
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					French
				</span>
			</div>
		</div>

		<div class="w-full sm:w-6/12 lg:w-4/12 max-w-sm my-5 rounded overflow-hidden shadow-lg bg-white">
			<img class="w-full" src="{{ asset('images/instructors/Aliaksandr-Shchur.jpg') }}"
			 alt="Instructor Aliaksandr Schur" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Aliaksandr</div>
				<p class="text-gray-700 text-base">
					Aliaksandr has more than 8 years of experience in delivering
					Authorised Cisco courses and seminars in Europe, Middle East and Asia.
					His main expertise includes but is not limited to routing and
					switching, wireless, network design and network security. He says that
					successful training is not just showing slides, but also an
					interpretation of information using tables, comparisons, schemes,
					graphs, and additional examples to help students to create a system of
					their knowledge, focusing on the material that can be implemented in
					the real world. Aliaksandr encourages students to ask any questions:
					he says that there are no stupid questions - it's silly to be afraid
					to ask questions. Instructor Excellence Award YEAR 2019 Security
					<br />
					Customer satisfaction score 4,94/5 (year 2018)
					<br />
					Customer satisfaction score 4,93/5 (year 2017)
					<br />
					<b>Certifications:</b>
					<br />
					Certified Cisco Systems Instructor CCSI #34250, CCNP R&S, CCDP, CCNP
					Security, CCNP Data Center, CCNA Service Provider, CCNA Wireless
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Belarussian
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Russian
				</span>
			</div>
		</div>

		<div class="w-full sm:w-6/12 lg:w-4/12 max-w-sm my-5 rounded overflow-hidden shadow-lg bg-white">
			<img class="w-full" src="{{ asset('images/instructors/Roberto-Naretto.jpg') }}" alt="Instructor Roberto Naretto" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Roberto</div>
				<p class="text-gray-700 text-base">
					Roberto is a distinguished Director of Information Technology and
					Pre-Sales Engineering with expertise in a diverse range of
					technologies including Cisco, Fortinet (NSE8 and FCT), Microsoft,
					PaloAlto Networks, Proofpoint, Infoblox, Forescout and FireEye Helix.
					He demonstrated success in managing Networking and IT Security Design,
					Quality Assurance, Product Development, Internet Technology.
					<br />
					Well-organized and a results-oriented, Roberto has proven the ability
					to implement standards, procedures and processes that improve business
					functionality. Solid management skills, capable of leading and
					motivating individuals to maximize levels of productivity, while
					forming cohesive team environments. Exceptional communicator focused
					on building strong client relationships at any level.
					<br />
					A great history as highly experienced, and self-motivated Business
					Development Manager and System Engineer with over 14 years' experience
					in the Networks Design and ICT Project Management from SMEs to large
					enterprises and MSSPs.
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Italian
				</span>
			</div>
		</div>

		<div class="w-full sm:w-6/12 lg:w-4/12 max-w-sm my-5 rounded overflow-hidden shadow-lg bg-white">
			<img class="w-full" src="{{ asset('images/instructors/Elter-Picolo.jpg') }}" alt="Instructor Elter Picolo" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Elter</div>
				<p class="text-gray-700 text-base">
					Elter has more than 21 years in the ICT market, with an international
					and multicultural experience in Collaboration environments at
					Financial, Telco and Public sectors, including:
					<br />
					Video as a Service (cloud), Service Providers, TelePresence Training
					and Consultancy, Management, Pre-Sales, Projects, Support,
					Installation, Maintenance and Field Operation with Tandberg, Acano,
					VBrick and Cisco solutions.
					<br />
					A former Tandberg and Acano Instructor became authorized trainer for
					Cisco (CCSI) in 2010 for Videoconference, Telepresence and
					Collaboration, including High Touch Delivery Learning Services
					classes. Post-graduate degree in teaching experienced on customized
					training and knowledge transfers. Received an Instructor Excellence
					Award from Learning@Cisco in two consecutive years 2014 and 2015.
					Holds several certifications on collaboration field including CCNA
					Collaboration, CCNP Collaboration, Telepresence Specialist and VBrick
					ICP and cloud certified.
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Spanish
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Portuguese
				</span>
			</div>
		</div>

		<div class="w-full sm:w-6/12 lg:w-4/12 max-w-sm my-5 rounded overflow-hidden shadow-lg bg-white">
			<img class="w-full" src="{{ asset('images/instructors/Pawel-S-Instructor.jpg') }}" alt="Instructor Pawel S" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Pawel</div>
				<p class="text-gray-700 text-base">
					Pawel has more than 20 years of experience working as a field engineer
					in IT projects across Poland, being responsible for routing,
					switching, security and wireless part of them.
					<br />
					He is involved in almost every phase of IT projects, starting from
					presales, to planning solutions, implementing and maintenance. He
					works with a variety of products and vendors
					<br />
					like 3Com, HP, Cisco, Juniper, Fortinet, PaloAlto, Huawei. Pawel has 4
					years of experience delivering courses on a wide range of Fortinet
					products and also CompTIA Security + courses.
					<br />
					Pawel knows that well-designed and informational PowerPoint slides are
					important, but not as important as the examples and cases taken from
					putting the learning into practice.
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Polish
				</span>
			</div>
		</div>

		<div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
			<img class="w-full" src="{{ asset('images/instructors/petro.jpg') }}" alt="Instructor Pietro" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Pietro</div>
				<p class="text-gray-700 text-base">
					Pietro has been working in the IT environment for more than 20 years.
					he has developed his experience in a different environment having
					worked in a telecom, bank and media company. Over the years he has
					developed his knowledge on a vast range of IT Platforms (Virtual,
					Cloud, Big Data, Networking). He has extensive experience of working
					in Operational roles thanks to his orientation in problem solving.
					<br />
					He started his career in the early 90' as Hardware Engineer and then
					he developed his skills to OS Software specializing in Network
					Operating Systems like Windows NT and Novell. At the end of 90' he
					decided to move his career to the UNIX world. He worked for many years
					with Sun Microsystems providing consulting to the biggest Telecom
					companies in Italy (Wind, TIM and Telecom). In 2007 he moved to the UK
					working for Citibank, Sky and other affirmative companies. Recently he
					started a new job as a consultant providing his expertise of Platform
					Engineering. During these years he achieved professional
					certifications as follow:
					<br />
					ITIL v3, Solaris 10 Administration, Zabbix Administration, Mapr
					Cluster Administration, Google Cloud Engineering
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					Italian
				</span>
			</div>
		</div>

		<div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg z-20 bg-white">
			<img class="w-full" src="{{ asset('images/instructors/Urs-Baumann-photo1.png') }}" alt="Instructor Urs Bauman" />
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">Urs</div>
				<p class="text-gray-700 text-base">
					Urs has more than 15 years of experience in information technology and
					5 years on network automation.
					<br />
					Due to his involvement in large automation projects, he has a
					comprehensive understanding of the process and design of automation
					solutions as well as the translation to automated tasks.
					<br />
					Has a solid knowledge of Cisco network, cloud infrastructure, DevOps
					and Python.
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
					English
				</span>
			</div>
		</div>
	</div>
</div>
<!--------------------------------Our recognition section----------------------------------------------->
<div class="bg-tertiary-300 pb-32 w-full transform -skew-y-6">
	<div class="container mx-auto transform skew-y-6">
		<div class="w-5/12 mx-auto pt-40 text-center">
			<h3 class="text-3xl">Our Recognition</h3>
			<p class="my-10 text-xl">
				Insoft Services has achieved the International Organisation for
				Standardisation's...
			</p>
			<a class="px-5 py-3 bg-primary-500 text-blue-100 hover:bg-primary-300 hover:text-primary-700"
			 href="{{ route('recognition') }}">
				Read more
			</a>
		</div>
	</div>
</div>
<div class="bg-tertiary-300 min-h-240 -mt-32"></div>

@endsection
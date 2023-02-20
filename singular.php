<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php /*

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	} */

	?>

	<section class="pagetitle">
		<div class="container">
			<div class="titletxt text-center">
				<h1> <?php echo esc_html( get_the_title() ); ?></h1>
			</div>
		</div>
	</section>

	<section class="blogsingle">
		<div class="container">
			<div class="blogsinglein df fww just-between">
				<div class="blogsingle_info">
					
						<p>Remote work is often touted as the future of work: a more efficient and practical way of doing business and saving time, money, and the environment. Unfortunately, recent events have conspired to make remote work more important than ever. It is no longer a lifestyle choice or a business decision. It is a <em>necessity</em>, not to save time or money, but to save lives and maintain economic activity during the biggest public health crisis in a century.</p>

						<p>Toptal was created around the concept of <a href="#!" target="_blank">remote work</a>, and our distributed team has been using a multitude of different remote working tools and techniques for years. Since this is not the case with most organizations, we are using this opportunity to share our experience in an effort to help everyone transitioning to remote work.</p>

						<p>This article will introduce you to various collaborative tools, video conferencing platforms, management suites, and other nonessential tools and services you may find helpful.</p>

						<p><strong>Note:</strong> <em>If you are an experienced freelancer, you are probably all too familiar with the tools we’ll be looking at today, as this roundup is aimed at people who are new to remote work.</em>
						</p>

						<h2>Essential Remote Work Tools</h2>
						<p>Working from home has never been easier, thanks to the rapid evolution of collaborative software and the cloud infrastructure that underpins most services today. However, the added broadband bandwidth and mature software solutions don’t mean that transitioning to remote work is seamless, nor that choosing the right tools is simple.</p>

						<p>At this point, we could merely list all the tools used by Toptal and our teams, as all of them are robust, reliable, and we can vouch for them. However, different industries and organizations have different needs, so we cannot recommend the same services for everyone. They work for us but might not be a good fit for you.</p>

						<p>Let’s take a closer look at your options.</p>

						<h2>Remote Collaboration and Communication</h2>
						<h3 >Slack</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">Slack</a> is a popular and well-established collaborative software solution. Launched in 2013, Slack also happens to be the only major collaborative suite that wasn’t created by an industry heavyweight such as Microsoft or Facebook. It’s feature-packed, robust, and available on all major operating systems.</p>

						<p>Slack is mainly geared toward freelancers and small to medium-sized businesses, but that does not mean it’s not widely used by large organizations as well. Toptal uses it to connect hundreds of core team members and thousands of freelancers, and Slack is used by dozens of Fortune 100 companies. As of 2019, Slack had upwards of 12 million daily users, though that number has grown in recent weeks.</p>

						<h3>Microsoft Teams</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">Microsoft Teams</a> was rolled out in 2016 after Microsoft dropped its plans to acquire Slack. The launch and initial reception could have been better, but eventually, Microsoft made some changes to distinguish it from the company’s existing products, namely, Skype for Business and Office 365.</p>

						<p>In 2018, Microsoft started offering a free version of Teams, which comes with some limitations but still offers a lot of features. Earlier this month, Microsoft announced Teams had 44 million daily users. Microsoft claims 93 Fortune 100 companies currently use Teams, with Accenture boasting more than 440,000 users.</p>

						<h3 >Facebook Workplace</h3>
						<p>Launched in 2016, <a href="#!" target="_blank" rel="noopener noreferrer">Facebook Workplace</a> marked the social network’s entry into the enterprise software arena. Although the market was somewhat skeptical at launch, Facebook managed to create a comprehensive solution that offers certain advantages, especially for small users.</p>

						<p>The pricing model is quite interesting and differentiates Workplace as the privacy policy states all data is owned by clients, not Facebook. Considering the amount of criticism Facebook faced over its privacy policies, this policy makes a lot of sense.</p>

						<h3>Which Should You Use?</h3>
						<p>Slack stands out as the most popular and probably the best all-round tool for distributed teams, but this does not apply to every team. Those using a lot of Microsoft products and services could be better off with Microsoft Teams, while others may even stick to run-of-the-mill apps they already use, with Skype being one example of a widely used platform.</p>

						<h2 >Video Conferencing</h2>
						<h3 >Zoom</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">Zoom</a> is widely seen as the go-to platform for video conferencing. At Toptal, we use Zoom for almost all of our meetings, including those with hundreds of participants. Zoom Basic is free, though it comes with certain limitations that might not be acceptable in some scenarios and industries (e.g., call length limited to 40 minutes). Pro subscriptions cost $14.99 per host per month, while Business and Enterprise plans cost $19.99.</p>

						<h3 >Jitsi Meet</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">Jitsi Meet</a> is a free and open-source alternative to Zoom and similar services. As such, it lacks some features such as screen sharing, though it can be added via extensions. In spite of its limited feature set, a lot of functionality is still available, and Jitsi Meet works on all major operating systems and can be used in a browser without having to download and set up the application. Ultimately, its biggest selling point is the fact that it’s open-source and free to use.</p>

						<h3>Google Hangouts Meet</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">Google Hangouts Meet</a> is a robust platform with similar features to Zoom, although the latter still has an edge in some.</p>

						<p>One problem could be pricing, as Google Hangouts Meet does not have a free tier, though prices start at $6 per user if you get access to Google’s G Suite services. This is substantially lower than Zoom’s Pro plan, but let’s not forget Zoom is available free of charge, provided you can live with 40-minute meetings.</p>

						<p><strong>Note:</strong> <em>Google is currently offering free access to the Enterprise Edition for all G Suite subscribers.</em></p>

						<h3 >Skype/Skype for Business</h3>
						<p>Skype has been around for ages and is still a popular platform for a lot of people. That’s why we’re including it here, as many organizations and individuals already use Skype and are likely to stick with it.</p>

						<p>As for Skype for Business, it was primarily geared toward users of Microsoft products, though it can be used on other platforms as well. The service never took off, and Microsoft announced plans to retire Skype for Business in mid-2021, migrating users to Microsoft Teams instead. However, for the time being, Skype for Business remains a viable alternative for existing Microsoft users (e.g., Office 365 Business Premium users). It is somewhat different to Zoom or Google Hangouts Meet, as it still has a lot of Skype DNA, so it’s not as specialized for video conferencing as the competing solutions.</p>

						<h2>Remote Desktop Software</h2>
						<p>Remote access software allows users to access and control one computer from another, so its importance is hard to overstate in situations that don’t allow for physical access.</p>

						<p>Although some desktop operating systems come with built-in remote desktop solutions, these might not be the best choice for every use case. Let’s take a closer look at some of the solutions out there.</p>

						<h3>TeamViewer</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">TeamViewer</a> is one of the oldest and best-known remote desktop suites on the market. It’s a mature product with cutting-edge features such as 4K desktop support, VPN support for added security, and support for most platforms used today. A free version is available for personal users and non-commercial purposes, but subscriptions for businesses don’t come cheap, especially if you require multiple sessions open at the same time involving several licensed users.</p>

						<h3 >RemotePC</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">RemotePC</a> is a cloud-based remote desktop solution geared toward personal and business users. It’s somewhat cheaper than TeamViewer, and since it’s cloud-based, it can be used in a browser window, which could be very beneficial in certain scenarios. There’s no free option, although a free trial is available. Prices start at $22 per year for the Consumer tier, while SOHO and Team plans cost $52.12 and $187.12, respectively.</p>

						<h3 >Apple Remote Desktop</h3>
						<p>Remote access to your Mac should be relatively straightforward thanks to <a href="#!" target="_blank" rel="noopener noreferrer">Apple Remote Desktop</a>. All you need to set up remote access is your Mac’s IP address and username. For the sake of brevity, you can check out this <a href="#!" target="_blank" rel="noopener noreferrer">step-by-step guide</a>. There are a few additional steps if you’re using a VPN or if you need FTP access, but setting up Apple Remote Desktop is easy and ultimately boils down to checking a few boxes and changing preferences. The basic license will set you back $79, and it’s worth noting the suite isn’t getting stellar reviews from users.</p>

						<h3 >Windows Remote Desktop</h3>
						<p>When it comes to remote access, Windows users have a lot more options to choose from than their Mac counterparts. In contrast to Apple’s solution, <a href="#!" target="_blank" rel="noopener noreferrer">Windows Remote Desktop</a> has a rather good reputation, as it features a natural user interface, and since it’s built into Windows, it doesn’t require a lot of time to set up. The most obvious downside is that it’s intended for Windows users, so if your team uses multiple operating systems, it might not be the ideal choice, although you can get a <a href="#!" target="_blank" rel="noopener noreferrer">Mac client</a> as well.</p>

						<h3 >Bonus: Chrome Remote Desktop</h3>
						<p>Google’s entry is <a href="#!" target="_blank" rel="noopener noreferrer">Chrome Remote Desktop</a>, a clever extension for Chrome. It’s an option if you don’t expect many remote sessions, as it’s free of charge and straightforward to set up. The problem? You need to run Chrome on both sides, so its utility is somewhat limited.</p>

						<h3 >Which Is Right for You?</h3>
						<p>Everything depends on your needs, but if we were to choose an all-round solution, we would opt for TeamViewer. It’s a mature product, it works on multiple operating systems, and it’s not overpriced. In fact, the free version could probably suffice for a lot of small teams and users that don’t need to host very long conference calls with lots of participants.</p>

						<h2 >Project Management Software</h2>
						<p>The rise of project management tools over the past decade was fueled by strong demand and rapid evolution. As a result, today, you can choose between dozens of solutions designed for various types of projects, different industries, small or big teams. We will not cover all of them, as you can find a detailed comparison of the most popular ones on our <a href="#!" target="_blank">Project Management Blog</a>.</p>

						<p>Let’s take a look at three widely used products, representative of three different categories of project management tools.</p>

						<h3 >Trello</h3>
						<p>One of the most popular options, Atlassian’s <a href="#!" target="_blank" rel="noopener noreferrer">Trello</a>, is a lightweight project management tool designed for short projects and teams with lightweight processes. Trello is often described as a Kanban board, though it’s a bit more than that.</p>

						<p>It’s easy to set up, team members can be onboarded quickly, and even the free version should suffice for most projects. Trello’s lightweight design also means that it’s not what we’d call feature-packed. We’d stop short of calling it a true project management app, but it can serve as one depending on the size and scope of your project.</p>

						<h3 >Asana</h3>
						<p>Originally developed for internal use at Facebook, <a href="#!" target="_blank" rel="noopener noreferrer">Asana</a> is a more elaborate project management tool, with more features than Trello. In many respects, it is better suited to more complex projects, thanks to advanced search options, task owner tracking, and so on. Unlike Trello, there’s no free plan, but at $10 per user per month, it’s not expensive, either.</p>

						<h3 >Jira</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">Jira</a> is another Atlassian product but more elaborate than Trello and geared toward bigger organizations, handling multiple agile projects at the same time. It also integrates with Confluence, Atlassian’s powerful data management tool, as well as Salesforce, GitHub, Outlook, and so on. Jira can be customized and tailored to your needs, though this may be tedious and involve a bit of training.</p>

						<h2 >Version Control Systems</h2>
						<p>With communication and management out of the way, let’s take a quick look at version control systems. At this point, there isn’t much to say about GitHub, GitLab, and Bitbucket, as most developers already use one or more of them. Still, in case you’re (very) late to the party, let’s examine them in a bit more detail.</p>

						<h3 >GitHub</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">GitHub</a> hardly needs an introduction, as it’s practically synonymous with open-source repo hosting. It can integrate with Jira, Jenkins, and Confluence. You can install it on your own server, or not, as it works with just about any cloud provider out there. It’s more or less the industry standard, especially for open-source projects.</p>

						<h3 >GitLab</h3>
						<p><a href="#!" target="_blank" rel="noopener noreferrer">GitLab</a> is more of a mixed bag, but it has quite a few things going for it. It could be a better choice for users on a tight budget, yet it provides practically all the features most users will ever need. It’s not just a version control system, but rather a complete DevOps platform. The downside could be the performance, especially when dealing with big projects (even more so when it’s not self-hosted). However, if you self-host it, performance should not be much of an issue.</p>

						<h3 >Bitbucket</h3>
						<p>A few years ago, Atlassian’s <a href="#!" target="_blank" rel="noopener noreferrer">Bitbucket</a> looked very promising, as it allowed private repositories at a time when GitHub did not, which made it an attractive alternative for private projects involving relatively small teams. Unfortunately, Bitbucket also acquired a reputation for poor responsiveness, plus open-source fans did not flock to it since it’s primarily designed for business clients and integration with other Atlassian products.</p>

						<h2 >Nonessential Remote Work Software and Services</h2>
						<p>Working from home starts to sound a lot less convenient if you run into technical problems, as you’ll have to be your own IT support, so using diagnostic software or web services such as Speedtest could come in handy, and you may need to perform a traceroute to help your ISP diagnose problems.</p>

						<p>Additionally, many people will need time tracking apps such as <a href="#!" target="_blank" rel="noopener noreferrer">Toggl</a> or our in-house solution, <a href="#!" target="_blank">TopTracker</a>. If you want to track and celebrate your team’s accomplishments, you could try <a href="#!" target="_blank" rel="noopener noreferrer">WooBoard</a> as a morale booster.</p>

						<p>Collaborating with team members across different time zones can be problematic, especially when daylight saving time kicks in, so a world clock app or widget may help as well.</p>

						<p>If you’re an office veteran used to taking notes and using post-its, now would be a good time to change your habits and embrace note-taking apps such as <a href="#!" target="_blank" rel="noopener noreferrer">Evernote</a> or <a href="#!" target="_blank" rel="noopener noreferrer">Google Keep</a>.</p>

						<h2 >A Word on Pricing</h2>
						<p>We were reluctant to include detailed pricing information for some services, as it is constantly changing due to the ongoing crisis. Some vendors are offering free access to otherwise paid platforms and services, while others are bumping up existing subscribers to better plans, free of charge.</p>

						<p>Most, if not all of these offers are time-limited, though they might be extended. In any case, you will need to check the price if and when you decide to sign up for any of these services.</p>

					
				</div>
				<aside>
					<?php dynamic_sidebar( 'Sidebar' ); ?>   
				</aside>
			</div>
		</div>
	</section>

</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>

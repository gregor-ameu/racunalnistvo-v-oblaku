1. Which of the following is an example of virtualization?
   answer: d) Multiple virtual machines running on the same server.
   Virtualization represents multiple virtual machines running on the same server meaning that each virtual machine has its own operation system and applications and all of the virtaul machines are installed on one physical server. The VMs run without beeing aware of eachother (similar to having multiple operation systems installed on one PC but these VMS can be run simultaneously) while sharing the same hardware resources using hypervisor software that is responsible for creating each virtual machine and connecting it to the hardware.

2. Which resources provide the ‘brains’ to process your workloads, including what is required to process and run requests from applications?
   answer: a) Compute
   each time we run an application, sand and run requests from applications the computer uses the CPU and RAM to "Compute" the requests and process the workload. the same principle applys to cloud comuting with the difference of having hardware assigned to the virtual machines or using all available hardware (all available processing power of the hardware combined) to process your workload.

3. When you need to provision a resource within the cloud, \***\*\_\*\*** makes it almost immediately available to you to allocate where and when you need it.
   answer d) on-denmand resourcing.
   Meaining that when you need to user resources it is possible to use all available resources throuh the VM and after you are finished with your task these resources become avialble to others as needed.

4. A **\_\_\_\_** cloud deployment model is where a vendor makes available the use of shared infrastructure, including compute, storage and network resources, that can be provisioned on demand and typically
   accessed over the internet.
   answer: d) public
   the public deployment model differs from other in case of a privet deployment model the infrastructure is privately hosted, managed and owned by the individual company using it, giving greater and more direct control of its data. where a hybrid could is a model that makes use of both public and private Clouds which is established when a network link is configured between the private cloud to services within the public clound, essentially extending
   the logical internal network of the Priv ate Cloud.

5. How are costs generally charged for cloud resources?
   answer: a) Utility-based metering where you only pay for what you use.
   If you only have an instance running for two hours, and then shut it down, then you only pay for two hours worth
   of compute resources, and that's it.

6. As an example of an important cloud characteristic, let's say you deploy a small website today. Next week, you add complex artificial intelligence services to it that are provided by a public cloud vendor. The following week, you deploy
   your website to multiple regions around the globe.
   What concept or characteristic of cloud computing does this represent?
   answer 2. High availability
   when deploying the website to multiple regions around the globe the underlying infrastructure of the public clound and its many core services are replicated across different geographics zones and regions. Having data copied to multiple different places automaticly ensuring durability and availability of your data and services.

7. The **\*\*\*\***\_\_\_**\*\*\*\*** cloud service model offers a balance between customization and user control, allowing developers to focus on designing at the application layer while the service handles the administration of the virtual
   architecture, including the network and operating system.
   answer: b) Platform-as-a-service.
   Platform as a service offeres an application framework that rests on top of the operating system. The underlying architecture, host hardware, network components and operating system are typically managed by the vendor allowing the user to focus on designing the application layer and handling its data.

8. As an example of an important cloud characteristic, let's say you deploy a small website today. Next week, you add complex artificial intelligence services to it that are provided by a public cloud vendor. The following week, you deploy
   your website to multiple regions around the globe.
   What concept or characteristic of cloud computing does this represent?
   answer: this question is duplicated (question 6.) b) High availability

9. Which of the following are not the sole responsibility of public cloud customers? (Choose 2 answers)
   answer: a) Path managment, d) network control
   a) while the vendor handles patching for the underlying infrastructure(hardware, hypervisor and managed services) the user is responsible for patching their own Operating system, applications or workloads.
   b) The back end element of how these services work is maintained and managed by the vendor (cloud provider secures the physical network and cloud infrastructure) . But architecting how your virtual network is created iy the user's responsibility to ensure it's secure and not vulnerable to attcks(configuring security groups, firewalls, and VPC settings within their environment.).

10. Which cloud resource saves and retains data, and is available at an almost unlimited amount within the cloud?
    answer: d) Storage
    the storage provaded within the could is ofter regarded as unlimited, hugely scalable and highly durable.

11. The **\*\*\*\***\_\_\_**\*\*\*\*** cloud service model offers the greatest amount of user customization and control but requires the greatest amount of user administration including the operating system, but not physical hardware.
    answer: a) Infrastructure-as-a-service(Iaas)
    Iaas clound services manages its own hardware where the user has full control over customization and control.

12. What benefit of cloud computing allows you to increase or decrease the power or quantity of resources at any time, without extensive installation or physical processes of provisioning?
    answer: b) Scalability
    Scalability allows users to increase or decrease resources (such as computing power, storage, or network capacity) on demand

13. You have been hired as an IT summer intern for a small, but quickly expanding, restaurant chain. The restaurant chain owner wants to expand her online presence by creating a website that will add more online features such as downloadable menus, real-time reservations, online ordering, web-based email, and a possible interactive chat during restaurant hours.
    The website will have high access demands from the 4:00 pm to 11:00 pm peak hours, and slower access demands during off-peak hours. The owner does not have any IT experience and does not want to become involved in the extra work of maintaining IT equipment.
    What do you recommend she do?
    answer b) Implement a public clound-computing enviroment.
    This solution eliminates the need for the owner to maintain IT equipment, allows scailabilidy during peak trafic, allows an easy deploy of web hosting, database, online ordering services and chat features and it provides a cost effective, pay as you go pricing.

14. Public cloud vendors have a common definition of what aspects of security are the vendor's responsibility and what aspects of security are the end user's responsibility. This is referred to as the Shared Responsibility Model. Under the Shared Responsibility Model, which of the following would be the end user's responsibility?
    answer d) Encryption of data stored within a cloud storage service such as Amazon Elastic Block Store
    while the public cloud vendor is responsible for securing the cloud infrastructure the use is responsible for securing their data, applications and access controls.

15. The **\*\*\*\***\_\_\_**\*\*\*\*** model requires no software installation and focuses on design simplicity and ease of use. It offers a minimal level of service customization.
    b) Software-as-a-Service
    SaaS applications are accessed via a web browser which requieres no software instalation, altho some provide with the option of installing this service as an application. examples: Google workplace (gmail, docs, drive), Microsoft 365, Dropbox, Salesforce, atlasian (jira, confluence, bitbutcket),...

16. You are leading a team of developers on a project whose goal is to improve customer experience on a credit card company's website. The solution requires that the developers write business requirement-oriented custom code. Your client wants the developers not to have the overhead of managing operating systems, runtimes, and middleware.
    Which of the following cloud offerings would you suggest to your client?
    b) Platform as a Service (PaaS)
    Paas provides the necesary services making it the ideal pre-configured development environment to allow the developers to focus on web applications, APIs, and database-driven solutions.

17. A business uses a combination of vendor-managed hardware, such as AWS, Azure, or Google Cloud, and its own hardware on premises to host virtualized resources. This is an example of the \***\*\_\_\_\*\*** cloud deployment model.
    c) hybrid
    Public cloud provides resources from vendors while the business also has its own private infrastructure making this a hybrit cloud deployment model.

18. One can argue that security on the public cloud is superior to on-premise security. Why is this? (Choose 2 answers)
    a) Public cloud vendor services must meet international security requirements.
    c) Public cloud vendor services must meet multiple business industries' security and governance requirements.
    Cloud vendors must adhere to ISO 27001, GDPR, SOC 2, HIPAA, FedRAMP, PCI DSS and other security standars these security standards ensure that the data is protected, properly encrypted while meeting the level of compliance is difficult and costly for individual businesses.

19. What is a key benefit of Virtualization?
    a) Reduced capital expenditure
    Virtualization allows users to run multiple virtual machines on a single physical server which reduces the need to purchase additional hardware leading to Lower capital expenditure, better resource utilization and easyer scalability.

20. Which of the following cloud computing concepts refers to increasing or decreasing compute resources based on demand?
    a) Elasticity
    Elasticity automaticly scales compute resources up or down based on demand meaning that the resources needed (CPU, RAM, storage) can be increased during peak demand and decreased durring off-peak periods optimizing cost efficiency and performance.

21. Which resources provide the connectivity allowing all other resources to communicate with each other?
    a) Network
    resources comunicate with eachother through the network enableing the flow of data between different services and components weather withing a data center or across multiple locations in a cloud environment.

22. In what way is a private cloud model similar to a public cloud model?
    c) Both private and public cloud models use virtualization to differentiate themselves from traditional on-premise servers.
    Both cloud models rely heavly on virtualization to create virtual machines, separate workloads and improve resource utilization. Which allows for dynamic allocation of resources, efficient scaling, and the ability to run multiple instances on a single physical server.

23. Which of the following is not a characteristic of the public cloud?
    b) One-time costs for virtual resources
    public clouds pricing model is based on pay as you go or utility-based metering meaning you pay for the resources you use.

24. Public cloud vendors have a common definition of what aspects of security are the vendor's responsibility and what aspects of security are the end user's responsibility. This is referred to as the Shared Responsibility Model. Under the Shared Responsibility Model, which of the following would be the end user's responsibility?
    a) Encryption of data stored within a cloud storage service such as Amazon Elastic Block Store
    the cloud provider manages the security of the cloud infrastructure, while the end user is responsible for securing the data and managing access controls.

25. What cloud resource type stores structured data used by cloud applications?
    d) Database
    Databases are optimized for storing and managing data in a structured format.

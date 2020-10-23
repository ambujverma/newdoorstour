
let org_id = "";
let id = "";
let ids = localStorage['id123'] ;


// function blog_post(blog_id){
//     ids = blog_id
// }

let obj = [
    {
        id:`id-0`,

        day_time : `October 21, 2020`,

        header_type:`Real Estate`,

        header_part:`Future of Real Estate post COVID-19`,

        url_img:`url(images/post-covid-1.png)`,

        p1:` COVID pandemic has shaken our entire world not just
        economies, businesses but also the society. Much has
        changed since the Coronavirus hit the world in December
        2019. Amid countries applying numerous measures to
        contain the pandemic, businesses came to a halt across the
        world, forcing monetary agencies to slash growth forecasts
        for the global economy, recent report from MOODY’s,
        GOLDMAN SACHS, IMF show the same result .`,

        p2:`While the ill effects of the pandemic are already being felt
        across world, varying opinions are emerging on COVID-19’s
        impact on the real estate sector. A more shocking fact
        emerges research agencies are predicting a near-term halt
        in growth of real estate in India. PropTiger.com data show
        housing sales in India’s eight major cities declined by 66%
        in the period between July-September 2020.
        The lockdown, brought most economic activity in the
        country to a halt, it has hurt all sectors, including real
        estate. The inauspicious impact of the Coronavirus is visible
        on housing sales in the last quarter of the last fiscal because
        March is usually one of the biggest month for sales,” says
        Dhruv Agarwala, group CEO, Housing.com,
        Makaan.com and PropTiger.com.`,

        video_img:`url(images/hero-prop-12.jpg)`,

        video_youtube:`https://www.youtube.com/embed/4Wee4LASqvE?start=23`,

        p3:` But central government is trying hard to give some
        relaxation to this sector, The Centre announced higher tax
        breaks and lower interest rates on home loans to make
        purchases more lucrative, apart from setting up an Rs
        25,000-crore stress fund for stuck projects.
        The demand halt in the residential segment has already
        curtailed housing sales, project launches and price growth
        in India’s residential realty sector, which has been under
        the pressure caused by big regulatory changes, such as the
        Real Estate Regulatory Authority (RERA), the Goods and
        Services Tax (GST), demonetization and the benami
        property law.`,

        p4:`Companies not only in India but worldwide have provided
        work from home facility to their employees which has led
        to decrease in office demand that has further led to
        downfall in revenue generation. Majority of malls were
        empty during look down and even now many of them have
        little crowd that led to less investment in new property,
        new ventures. Another sad news for real estate business is
        that now many home buyers have also post poned the
        buying of new houses because of majorly two factors - 1) Chances of Getting infected from virus.
        2)Uncertainty of their own financial condition
        3) Fear of losing their jobs`,

        p5:` Delay in supply of construction material is another
        significant reason for downfall of real estate sector many of
        the workers have returned to their native places in month
        of may June. Due to scarcity of cheap labor it has become
        very difficult to operate functions under same price.
        But covid has changed many things for sure in our realestate business, like- With the forced lockdown and
        continued Work from Home (WFH) and online schooling,
        people are now eyeing larger homes – even if they have to
        move to the peripheries to fit their budgets. There’s high
        demand for 3 BHK. The increase in demand for big
        houses in not a bad sign for this sector but now the
        housing plan needs a change.
        It has been known fact that the sector, especially
        residential segment, has already been struggling with
        project delays, regulatory changes for last few years. And
        How the coronavirus will affect it, is a new question. There is a belief that the residential market would be affected
        more as the problem of labor, delays, finance and sale will
        only get worst. The estimate is that people will lose jobs
        and would not take a long-term loan when they are not
        confident about the future.
        The developers may not be able to sustain the present
        debts and would go bankrupt if the government does not
        come out with a relief sooner or later. Even labor would
        not come back to big towns as they will feel comparatively
        safer in the villages, which might end up increasing production cost. With labour unavailability, the costs of
        building homes would go up due to increase in cost of
        labour and the low supply will result in increase in cost of
        materials .`,

        quote:`The impact of the novel Coronavirus on Indian real estate has been unprecedented. The Nationwide house price index for May showed that prices fell 1.7% from the previous month, the largest decline for 11 years.`,

        img1:`images/post-covid-2.png`,

        img2:`images/post-covid-3.png`,

        final_para:`Dispite all our fears and less expectations, real estate in the
        post-covid world will most likely survive and eventually
        thrive as an asset sector, though it will have mny changes
        and many different things. Decentralization, redistribution
        and restructuring will be the major themes of this mega
        transformation which is also the need of time. The good
        news for India is that in the long-term housing demand
        trend remains constant due to a young population which
        continues to enter the workforce in large numbers.
        In the last few years, there has been a huge shift in mindset
        among first-time homebuyers who began to favour a rental
        home, different from the established choice of Indians to
        buy homes. there will be increasing preference to move
        away from the polluted, congested parts of the city. Cities
        like Bengaluru, supported by metro rail connectivity, are
        already witnessing a shift toward the suburbs. In those sub
        urban area there will be a huge demand of housing and that
        will help real estate to flourish again.
        With better connecting network, satellite towns will emerge and
we saw that in case of National Capital Region, this could get 
replicated in other metros like Mumbai , Bengaluru this will get a
huge jump for real estate market.`
        
    },
    {
        id:`id-1`,

        day_time : `September 29, 2020`,

        header_type:`Virtual Reality`,

        header_part:`Virtual Reality V/S Augumented Reality`,

        url_img:`url(images/post-3.jpg)`,

        p1:` Most designers will tell you that, as much as we all love to
        watch home design shows, their prevalence has done them a
        bit of a disservice. Thanks to TV magic, the designers on
        those shows pull off projects with tight deadlines and
        shoestring budgets that would never fly in the real world.`,

        p2:`Of course, every project is different. The best way to get a
        handle on an anticipated budget and duration is by asking
        potential designers for this information upfront. Don’t be
        afraid to reach out to more than one to get a realistic
        picture of what to expect.`,

        video_img:`url(images/hero-prop-12.jpg)`,

        video_youtube:`https://www.youtube.com/embed/4Wee4LASqvE?start=23`,

        p3:` Not all designers are created equal. Like all of us, each
        designer has his or her own unique personal tastes, quirks
        and business practices. To make sure your project is a
        success, it’s important that you and your designer are on
        the same page with a lot of these details. You may need to
        interview a few before you find someone who’s the right fit.`,

        p4:`In the design world, this interview is called a
        consultation. It can be an in-person meeting or held over
        the phone, and it can be paid or unpaid. You can use this
        time to ask to see samples of the designer’s work, learn
        more about their process, and ask about business practices,
        such as their preferred methods for communication and
        billing.`,

        p5:` You can also use this time to let the designer get to know
        you. Feel free to bring in a few photos or items you intend
        to use for design inspiration. Let the designer know about
        your specific quirks and personal preferences. By the end of
        the meeting, you should have a good sense of whether the two
        of you will work well together.`,

        quote:`It is a long established fact that a reader will be
        distracted by the readable content of a page when looking at
        its layout.`,

        img1:`images/hero-prop-4.jpg`,

        img2:`images/hero-prop-9.jpg`,

        final_para:`For those who have never hired an interior designer before,
        the idea of doing so can feel out of reach, but it doesn’t
        need to be. We’ve created a first-timer’s guide to working
        with an interior designer to help you take the plunge. Use
        the advice in this post to make an informed decision as to
        whether hiring professional help is the right choice for
        you.`
    },
    {
        id:`id-2`,

        day_time : `April 9, 2019`,

        header_type:`Interior Design`,

        header_part:`What to Expect When Working with an Interior Designer`,

        url_img:`url(images/post-6.jpg)`,

        p1:` Most designers will tell you that, as much as we all love to
        watch home design shows, their prevalence has done them a
        bit of a disservice. Thanks to TV magic, the designers on
        those shows pull off projects with tight deadlines and
        shoestring budgets that would never fly in the real world.`,

        p2:`Of course, every project is different. The best way to get a
        handle on an anticipated budget and duration is by asking
        potential designers for this information upfront. Don’t be
        afraid to reach out to more than one to get a realistic
        picture of what to expect.`,

        video_img:`url(images/hero-prop-12.jpg)`,

        video_youtube:`https://www.youtube.com/embed/4Wee4LASqvE?start=23`,

        p3:` Not all designers are created equal. Like all of us, each
        designer has his or her own unique personal tastes, quirks
        and business practices. To make sure your project is a
        success, it’s important that you and your designer are on
        the same page with a lot of these details. You may need to
        interview a few before you find someone who’s the right fit.`,

        p4:`In the design world, this interview is called a
        consultation. It can be an in-person meeting or held over
        the phone, and it can be paid or unpaid. You can use this
        time to ask to see samples of the designer’s work, learn
        more about their process, and ask about business practices,
        such as their preferred methods for communication and
        billing.`,

        p5:` You can also use this time to let the designer get to know
        you. Feel free to bring in a few photos or items you intend
        to use for design inspiration. Let the designer know about
        your specific quirks and personal preferences. By the end of
        the meeting, you should have a good sense of whether the two
        of you will work well together.`,

        quote:`It is a long established fact that a reader will be
        distracted by the readable content of a page when looking at
        its layout.`,

        img1:`images/hero-prop-3.jpg`,

        img2:`images/hero-prop-12.jpg`,

        final_para:`For those who have never hired an interior designer before,
        the idea of doing so can feel out of reach, but it doesn’t
        need to be. We’ve created a first-timer’s guide to working
        with an interior designer to help you take the plunge. Use
        the advice in this post to make an informed decision as to
        whether hiring professional help is the right choice for
        you.`
    },
    {
        id:`id-3`,

        day_time : `April 9, 2019`,

        header_type:`Interior Design`,

        header_part:`What to Expect When Working with an Interior Designer`,

        url_img:`url(images/post-5.jpg)`,

        p1:` Most designers will tell you that, as much as we all love to
        watch home design shows, their prevalence has done them a
        bit of a disservice. Thanks to TV magic, the designers on
        those shows pull off projects with tight deadlines and
        shoestring budgets that would never fly in the real world.`,

        p2:`Of course, every project is different. The best way to get a
        handle on an anticipated budget and duration is by asking
        potential designers for this information upfront. Don’t be
        afraid to reach out to more than one to get a realistic
        picture of what to expect.`,

        video_img:`url(images/hero-prop-12.jpg)`,

        video_youtube:`https://www.youtube.com/embed/4Wee4LASqvE?start=23`,

        p3:` Not all designers are created equal. Like all of us, each
        designer has his or her own unique personal tastes, quirks
        and business practices. To make sure your project is a
        success, it’s important that you and your designer are on
        the same page with a lot of these details. You may need to
        interview a few before you find someone who’s the right fit.`,

        p4:`In the design world, this interview is called a
        consultation. It can be an in-person meeting or held over
        the phone, and it can be paid or unpaid. You can use this
        time to ask to see samples of the designer’s work, learn
        more about their process, and ask about business practices,
        such as their preferred methods for communication and
        billing.`,

        p5:` You can also use this time to let the designer get to know
        you. Feel free to bring in a few photos or items you intend
        to use for design inspiration. Let the designer know about
        your specific quirks and personal preferences. By the end of
        the meeting, you should have a good sense of whether the two
        of you will work well together.`,

        quote:`It is a long established fact that a reader will be
        distracted by the readable content of a page when looking at
        its layout.`,

        img1:`images/hero-prop-4.jpg`,

        img2:`images/hero-prop-12.jpg`,

        final_para:`For those who have never hired an interior designer before,
        the idea of doing so can feel out of reach, but it doesn’t
        need to be. We’ve created a first-timer’s guide to working
        with an interior designer to help you take the plunge. Use
        the advice in this post to make an informed decision as to
        whether hiring professional help is the right choice for
        you.`
    },
    {
        id:`id-4`,

        day_time : `April 9, 2019`,

        header_type:`Architecture`,

        header_part:`What to Expect When Working with an Architecture`,

        url_img:`url(images/post-4.jpg)`,

        p1:` Most designers will tell you that, as much as we all love to
        watch home design shows, their prevalence has done them a
        bit of a disservice. Thanks to TV magic, the designers on
        those shows pull off projects with tight deadlines and
        shoestring budgets that would never fly in the real world.`,

        p2:`Of course, every project is different. The best way to get a
        handle on an anticipated budget and duration is by asking
        potential designers for this information upfront. Don’t be
        afraid to reach out to more than one to get a realistic
        picture of what to expect.`,

        video_img:`url(images/hero-prop-12.jpg)`,

        video_youtube:`https://www.youtube.com/embed/4Wee4LASqvE?start=23`,

        p3:` Not all designers are created equal. Like all of us, each
        designer has his or her own unique personal tastes, quirks
        and business practices. To make sure your project is a
        success, it’s important that you and your designer are on
        the same page with a lot of these details. You may need to
        interview a few before you find someone who’s the right fit.`,

        p4:`In the design world, this interview is called a
        consultation. It can be an in-person meeting or held over
        the phone, and it can be paid or unpaid. You can use this
        time to ask to see samples of the designer’s work, learn
        more about their process, and ask about business practices,
        such as their preferred methods for communication and
        billing.`,

        p5:` You can also use this time to let the designer get to know
        you. Feel free to bring in a few photos or items you intend
        to use for design inspiration. Let the designer know about
        your specific quirks and personal preferences. By the end of
        the meeting, you should have a good sense of whether the two
        of you will work well together.`,

        quote:`It is a long established fact that a reader will be
        distracted by the readable content of a page when looking at
        its layout.`,

        img1:`images/hero-prop-3.jpg`,

        img2:`images/hero-prop-9.jpg`,

        final_para:`For those who have never hired an interior designer before,
        the idea of doing so can feel out of reach, but it doesn’t
        need to be. We’ve created a first-timer’s guide to working
        with an interior designer to help you take the plunge. Use
        the advice in this post to make an informed decision as to
        whether hiring professional help is the right choice for
        you.`
    },
    {
        id:`id-5`,

        day_time : `April 9, 2019`,

        header_type:`Architecture`,

        header_part:`What to Expect When Working with an Architecture`,

        url_img:`url(images/post-3.jpg)`,

        p1:` Most designers will tell you that, as much as we all love to
        watch home design shows, their prevalence has done them a
        bit of a disservice. Thanks to TV magic, the designers on
        those shows pull off projects with tight deadlines and
        shoestring budgets that would never fly in the real world.`,

        p2:`Of course, every project is different. The best way to get a
        handle on an anticipated budget and duration is by asking
        potential designers for this information upfront. Don’t be
        afraid to reach out to more than one to get a realistic
        picture of what to expect.`,

        video_img:`url(images/hero-prop-12.jpg)`,

        video_youtube:`https://www.youtube.com/embed/4Wee4LASqvE?start=23`,

        p3:` Not all designers are created equal. Like all of us, each
        designer has his or her own unique personal tastes, quirks
        and business practices. To make sure your project is a
        success, it’s important that you and your designer are on
        the same page with a lot of these details. You may need to
        interview a few before you find someone who’s the right fit.`,

        p4:`In the design world, this interview is called a
        consultation. It can be an in-person meeting or held over
        the phone, and it can be paid or unpaid. You can use this
        time to ask to see samples of the designer’s work, learn
        more about their process, and ask about business practices,
        such as their preferred methods for communication and
        billing.`,

        p5:` You can also use this time to let the designer get to know
        you. Feel free to bring in a few photos or items you intend
        to use for design inspiration. Let the designer know about
        your specific quirks and personal preferences. By the end of
        the meeting, you should have a good sense of whether the two
        of you will work well together.`,

        quote:`It is a long established fact that a reader will be
        distracted by the readable content of a page when looking at
        its layout.`,

        img1:`images/hero-prop-4.jpg`,

        img2:`images/hero-prop-10.jpg`,

        final_para:`For those who have never hired an interior designer before,
        the idea of doing so can feel out of reach, but it doesn’t
        need to be. We’ve created a first-timer’s guide to working
        with an interior designer to help you take the plunge. Use
        the advice in this post to make an informed decision as to
        whether hiring professional help is the right choice for
        you.`
    },
    {
        id:`id-6`,

        day_time : `April 9, 2019`,

        header_type:`Interior Design`,

        header_part:`What to Expect When Working with an Interior Designer`,

        url_img:`url(images/post-2.jpg)`,

        p1:` Most designers will tell you that, as much as we all love to
        watch home design shows, their prevalence has done them a
        bit of a disservice. Thanks to TV magic, the designers on
        those shows pull off projects with tight deadlines and
        shoestring budgets that would never fly in the real world.`,

        p2:`Of course, every project is different. The best way to get a
        handle on an anticipated budget and duration is by asking
        potential designers for this information upfront. Don’t be
        afraid to reach out to more than one to get a realistic
        picture of what to expect.`,

        video_img:`url(images/hero-prop-12.jpg)`,

        video_youtube:`https://www.youtube.com/embed/4Wee4LASqvE?start=23`,

        p3:` Not all designers are created equal. Like all of us, each
        designer has his or her own unique personal tastes, quirks
        and business practices. To make sure your project is a
        success, it’s important that you and your designer are on
        the same page with a lot of these details. You may need to
        interview a few before you find someone who’s the right fit.`,

        p4:`In the design world, this interview is called a
        consultation. It can be an in-person meeting or held over
        the phone, and it can be paid or unpaid. You can use this
        time to ask to see samples of the designer’s work, learn
        more about their process, and ask about business practices,
        such as their preferred methods for communication and
        billing.`,

        p5:` You can also use this time to let the designer get to know
        you. Feel free to bring in a few photos or items you intend
        to use for design inspiration. Let the designer know about
        your specific quirks and personal preferences. By the end of
        the meeting, you should have a good sense of whether the two
        of you will work well together.`,

        quote:`It is a long established fact that a reader will be
        distracted by the readable content of a page when looking at
        its layout.`,

        img1:`images/hero-prop-10.jpg`,

        img2:`images/hero-prop-12.jpg`,

        final_para:`For those who have never hired an interior designer before,
        the idea of doing so can feel out of reach, but it doesn’t
        need to be. We’ve created a first-timer’s guide to working
        with an interior designer to help you take the plunge. Use
        the advice in this post to make an informed decision as to
        whether hiring professional help is the right choice for
        you.`
    },
    {
        ///EXTRA ID CREATED FOR RUNTIME IF WE WANT TO ADD DATA TO IT
        id:`id-7`,

        day_time : `April 9, 2019`,

        header_type:`Interior Design`,

        header_part:`What to Expect When Working with an Interior Designer`,

        url_img:`url(images/post-1.jpg)`,

        p1:` Most designers will tell you that, as much as we all love to
        watch home design shows, their prevalence has done them a
        bit of a disservice. Thanks to TV magic, the designers on
        those shows pull off projects with tight deadlines and
        shoestring budgets that would never fly in the real world.`,

        p2:`Of course, every project is different. The best way to get a
        handle on an anticipated budget and duration is by asking
        potential designers for this information upfront. Don’t be
        afraid to reach out to more than one to get a realistic
        picture of what to expect.`,

        video_img:`url(images/hero-prop-12.jpg)`,

        video_youtube:`https://www.youtube.com/embed/4Wee4LASqvE?start=23`,

        p3:` Not all designers are created equal. Like all of us, each
        designer has his or her own unique personal tastes, quirks
        and business practices. To make sure your project is a
        success, it’s important that you and your designer are on
        the same page with a lot of these details. You may need to
        interview a few before you find someone who’s the right fit.`,

        p4:`In the design world, this interview is called a
        consultation. It can be an in-person meeting or held over
        the phone, and it can be paid or unpaid. You can use this
        time to ask to see samples of the designer’s work, learn
        more about their process, and ask about business practices,
        such as their preferred methods for communication and
        billing.`,

        p5:` You can also use this time to let the designer get to know
        you. Feel free to bring in a few photos or items you intend
        to use for design inspiration. Let the designer know about
        your specific quirks and personal preferences. By the end of
        the meeting, you should have a good sense of whether the two
        of you will work well together.`,

        quote:`It is a long established fact that a reader will be
        distracted by the readable content of a page when looking at
        its layout.`,

        img1:`images/hero-prop-4.jpg`,

        img2:`images/hero-prop-9.jpg`,

        final_para:`For those who have never hired an interior designer before,
        the idea of doing so can feel out of reach, but it doesn’t
        need to be. We’ve created a first-timer’s guide to working
        with an interior designer to help you take the plunge. Use
        the advice in this post to make an informed decision as to
        whether hiring professional help is the right choice for
        you.`
    },
    {   id:`id-8`,

        day_time : `April 9, 2019`,

        header_type:`Interior Design`,

        header_part:`Sample Blog`,

        url_img:`url(images/single-post-fig.jpg)`,

        p1:` Most designers will tell you that, as much as we all love to
        watch home design shows, their prevalence has done them a
        bit of a disservice. Thanks to TV magic, the designers on
        those shows pull off projects with tight deadlines and
        shoestring budgets that would never fly in the real world.`,

        p2:`Of course, every project is different. The best way to get a
        handle on an anticipated budget and duration is by asking
        potential designers for this information upfront. Don’t be
        afraid to reach out to more than one to get a realistic
        picture of what to expect.`,

        video_img:`url(images/hero-prop-12.jpg)`,

        video_youtube:`https://www.youtube.com/embed/4Wee4LASqvE?start=23`,

        p3:` Not all designers are created equal. Like all of us, each
        designer has his or her own unique personal tastes, quirks
        and business practices. To make sure your project is a
        success, it’s important that you and your designer are on
        the same page with a lot of these details. You may need to
        interview a few before you find someone who’s the right fit.`,

        p4:`In the design world, this interview is called a
        consultation. It can be an in-person meeting or held over
        the phone, and it can be paid or unpaid. You can use this
        time to ask to see samples of the designer’s work, learn
        more about their process, and ask about business practices,
        such as their preferred methods for communication and
        billing.`,

        p5:` You can also use this time to let the designer get to know
        you. Feel free to bring in a few photos or items you intend
        to use for design inspiration. Let the designer know about
        your specific quirks and personal preferences. By the end of
        the meeting, you should have a good sense of whether the two
        of you will work well together.`,

        quote:`It is a long established fact that a reader will be
        distracted by the readable content of a page when looking at
        its layout.`,

        img1:`images/hero-prop-3.jpg`,

        img2:`images/hero-prop-10.jpg`,

        final_para:`For those who have never hired an interior designer before,
        the idea of doing so can feel out of reach, but it doesn’t
        need to be. We’ve created a first-timer’s guide to working
        with an interior designer to help you take the plunge. Use
        the advice in this post to make an informed decision as to
        whether hiring professional help is the right choice for
        you.`
        
    }

];


function dynamic_post_change(){
    ids = localStorage['id123'];
    console.log(ids);
    ids = localStorage.getItem("id12345");
    console.log(ids);
    org_id = ids;
    id = org_id[3];

    console.log("i am inside function start");

    document.getElementById("day_time").innerHTML = obj[id].day_time;
    document.getElementById("header_type").innerHTML = obj[id].header_type;
    document.getElementById("header_part").innerHTML = obj[id].header_part;
    document.getElementById("url_img").style.backgroundImage = obj[id].url_img;
    document.getElementById("p1").innerHTML = obj[id].p1;
    document.getElementById("p2").innerHTML = obj[id].p2;
    document.getElementById("video_img").style.backgroundImage = obj[id].video_img;
    document.getElementById("video_youtube").src = obj[id].video_youtube;
    document.getElementById("p3").innerHTML = obj[id].p3;
    document.getElementById("p4").innerHTML = obj[id].p4;
    document.getElementById("p5").innerHTML = obj[id].p5;
    document.getElementById("quote").innerHTML = obj[id].quote;
    document.getElementById("img1").src = obj[id].img1;
    document.getElementById("img2").src = obj[id].img2;
    document.getElementById("final_para").innerHTML = obj[id].final_para;
    console.log("i am inside function end");

}


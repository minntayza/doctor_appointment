<style>
    a {
 position: relative;
 display: inline-block;
 cursor: pointer;
 outline: none;
 border: 0;
 vertical-align: middle;
 text-decoration: none;
 font-family: inherit;
 font-size: 15px;
}

a.learn-more {
 font-weight: 600;
 color: #382b22;
 text-transform: uppercase;
 padding: 1.25em 2em;
 background: #fff0f0;
 border: 2px solid #b18597;
 border-radius: 0.75em;
 -webkit-transform-style: preserve-3d;
 transform-style: preserve-3d;
 -webkit-transition: background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
 transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
}

a.learn-more::before {
 position: absolute;
 content: '';
 width: 100%;
 height: 100%;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0;
 background: #f9c4d2;
 border-radius: inherit;
 -webkit-box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
 box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
 -webkit-transform: translate3d(0, 0.75em, -1em);
 transform: translate3d(0, 0.75em, -1em);
 transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-box-shadow 150ms cubic-bezier(0, 0, 0.58, 1);
}

a.learn-more:hover {
 background: #ffe9e9;
 -webkit-transform: translate(0, 0.25em);
 transform: translate(0, 0.25em);
}

a.learn-more:hover::before {
 -webkit-box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
 box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
 -webkit-transform: translate3d(0, 0.5em, -1em);
 transform: translate3d(0, 0.5em, -1em);
}

a.learn-more:active {
 background: #ffe9e9;
 -webkit-transform: translate(0em, 0.75em);
 transform: translate(0em, 0.75em);
}

a.learn-more:active::before {
 -webkit-box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
 box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
 -webkit-transform: translate3d(0, 0, -1em);
 transform: translate3d(0, 0, -1em);
}
h1 {
        font-size: 3rem; /* Base font size */
        font-weight: bold;
        background-image: linear-gradient(to right, #008080, #4B0082);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 1rem; /* Add some bottom margin */
    }

    /* Responsive adjustments */
    @media (min-width: 640px) { /* sm: breakpoint (small screens) */
        h1 {
            font-size: 3.5rem; /* Slightly larger on small screens */
        }
    }

    @media (min-width: 768px) { /* md: breakpoint (medium screens) */
        h1 {
            font-size: 4rem; /* Larger on medium screens */
        }
    }

    @media (min-width: 1024px) { /* lg: breakpoint (large screens) */
        h1 {
            font-size: 4.5rem; /* Largest on large screens */
        }
    }

    p {
        margin-bottom: 1.5rem; /* Add bottom margin to paragraphs */
    }

    .container {
        padding-left: 1rem; /* Adjust padding as needed */
        padding-right: 1rem; /* Adjust padding as needed */
    }

    @media (min-width: 1024px) {
        .container {
            padding-left: 4rem; /* Larger padding on large screens */
            padding-right: 4rem; /* Larger padding on large screens */
        }
    }


    .learn-more {
        display: inline-block; /* Ensure it behaves like an inline element */
    }

    img {
        max-width: 100%; /* Make sure the image scales down */
        height: auto;   /* Maintain aspect ratio */
        display: block; /* Prevent image from affecting layout */
        margin: 0 auto;  /* Center the image */
    }

</style>

{{-- hero section --}}
<div class="container px-6 py-16 mx-auto">
    <div class="items-center lg:flex lg:flex-wrap">  <div class="w-full lg:w-1/2 lg:order-1"> <div class="lg:max-w-lg">
                <h1>
                    Doctor Appointment
                    System
                </h1>
                <p class="mt-3 text-black dark:text-gray-400">
                    Experience a new era of healthcare efficiency with our state-of-the-art Hospital Management System. Designed to streamline every aspect of hospital operations, from patient registration and appointments to billing and reporting, our platform empowers healthcare providers to focus on what truly matters—delivering exceptional patient care. With advanced features, intuitive interfaces, and secure data management, we ensure seamless collaboration across departments, improving both productivity and patient satisfaction. Transform your hospital into a smarter, more efficient healthcare facility today.
                </p>
                <a href="/register" class="learn-more mt-5">
                    Learn More
                </a>
            </div>
        </div>

        <div class=" lg:flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2 lg:order-2">
            <img src="./images/Hospital.svg" alt="Hospital.svg" class="w-full h-auto">
        </div>
    </div>
</div>

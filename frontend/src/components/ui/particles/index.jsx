import { useCallback, useEffect, useState } from "react";
import Particles, { initParticlesEngine } from "@tsparticles/react";
// import { loadAll } from "@/tsparticles/all"; // if you are going to use `loadAll`, install the "@tsparticles/all" package too.
// import { loadFull } from "tsparticles"; // if you are going to use `loadFull`, install the "tsparticles" package too.
import { loadSlim } from "@tsparticles/slim"; // if you are going to use `loadSlim`, install the "@tsparticles/slim" package too.
// import { loadBasic } from "@tsparticles/basic"; // if you are going to use `loadBasic`, install the "@tsparticles/basic" package too.

const ParticlesComponent = () => {
    const [init, setInit] = useState(false);

    // this should be run only once per application lifetime
    useEffect(() => {
        initParticlesEngine(async (engine) => {
            // you can initiate the tsParticles instance (engine) here, adding custom shapes or presets
            // this loads the tsparticles package bundle, it's the easiest method for getting everything ready
            // starting from v2 you can add only the features you need reducing the bundle size
            //await loadAll(engine);
            //await loadFull(engine);
            await loadSlim(engine);
            //await loadBasic(engine);
        }).then(() => {
            setInit(true);
        });
    }, []);

    const particlesLoaded = (container) => {
        console.log(container);
    };

    return (
        // <></>

        <>
            {init && (
                <Particles
                    id="tsparticles"
                    particlesLoaded={particlesLoaded}
                    options={{
                        fpsLimit: 60,
                        interactivity: {
                            events: {
                                onClick: { enable: true, mode: "push" },
                                onHover: {
                                    enable: true,
                                    mode: "repulse",
                                    parallax: {
                                        enable: false,
                                        force: 60,
                                        smooth: 10,
                                    },
                                },
                                resize: true,
                            },
                            modes: {
                                push: { quantity: 4 },
                                repulse: { distance: 200, duration: 0.4 },
                            },
                        },
                        particles: {
                            color: { value: ["#7FC7BD", "#ffE7BD"] },
                            move: {
                                direction: "none",
                                enable: true,
                                outModes: "out",
                                random: false,
                                speed: 1,
                                straight: false,
                            },
                            number: {
                                density: {
                                    enable: true,
                                    area: 1000,
                                },
                                value: 200,
                            },
                            opacity: {
                                animation: {
                                    enable: false,
                                    speed: 1,
                                    sync: true,
                                    startValue: "max",
                                    count: 1,
                                    destroy: "min",
                                },
                                value: {
                                    min: 0,
                                    max: 0.8,
                                },
                                random: true,
                            },
                            shape: {
                                type: "circle",
                                stroke: {
                                    width: 0,
                                    color: "#000000",
                                },
                                polygon: {
                                    nb_sides: 4,
                                },
                                image: {
                                    src: "img/github.svg",
                                    width: 100,
                                    height: 100,
                                },
                            },
                            size: {
                                value: { min: 1, max: 3 },
                            },
                        },
                    }}
                />
            )}{" "}
        </>
    );
};

export default ParticlesComponent;

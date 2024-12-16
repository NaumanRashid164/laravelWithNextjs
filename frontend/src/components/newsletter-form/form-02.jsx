import { useForm } from "react-hook-form";
import Button from "@ui/button";
import ErrorText from "@ui/error-text";

const NewsletterForm = () => {
    const {
        register,
        handleSubmit,
        formState: { errors },
    } = useForm();
    const onSubmit = (data) => {
        // eslint-disable-next-line no-console
        console.log(data);
    };
    return (
        <form className="newsletter-wrapper" onSubmit={handleSubmit(onSubmit)}>
            <h2 className="title">
                Sign up for The Tide, Nuron&apos;s newsletter!
            </h2>
            <p className="discription">
                Sign up to receive our monthly newsletter, featuring updates
                from the team, new decentralized applications and NFT projects,
                and trends we’re seeing in the space.
            </p>
            <input
                type="email"
                placeholder="Your Email Address..."
                {...register("subscribeEmail", {
                    required: "Email is required",
                    pattern: {
                        value: /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i,
                        message: "invalid email address",
                    },
                })}
            />
            <Button size="medium" type="submit" className="mt--30">
                Subscribe
            </Button>
            <br />
            {errors.subscribeEmail && (
                <ErrorText>{errors.subscribeEmail?.message}</ErrorText>
            )}
        </form>
    );
};

export default NewsletterForm;

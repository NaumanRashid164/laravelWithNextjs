/* eslint-disable react/button-has-type */
import PropTypes from "prop-types";
import clsx from "clsx";
import Anchor from "../anchor";

const Button = ({
    children,
    type = "button",
    label,
    onClick,
    className,
    path,
    size = "large",
    color = "primary",
    shape,
    fullwidth,
    ...rest
}) => {
    if (path) {
        return (
            <Anchor
                label={label}
                onClick={onClick}
                className={clsx(
                    className,
                    "btn",
                    `btn-${size}`,
                    `btn-${color}`,
                    fullwidth && "w-100 d-block",
                    shape === "ellipse" && "rounded"
                )}
                path={path}
                {...rest}
            >
                <span>{children}</span>
            </Anchor>
        );
    }

    return (
        <button
            aria-label={label}
            onClick={onClick}
            className={clsx(
                className,
                "btn",
                `btn-${size}`,
                `btn-${color}`,
                fullwidth && "w-100 d-block",
                shape === "ellipse" && "rounded"
            )}
            type={type}
            {...rest}
        >
            <span>{children}</span>
        </button>
    );
};

Button.propTypes = {
    children: PropTypes.node.isRequired,
    type: PropTypes.oneOf(["button", "submit", "reset"]),
    label: PropTypes.string,
    onClick: PropTypes.func,
    className: PropTypes.string,
    path: PropTypes.string,
    size: PropTypes.oneOf(["large", "small", "medium"]),
    color: PropTypes.oneOf(["primary", "primary-alta"]),
    shape: PropTypes.oneOf(["square", "ellipse"]),
    fullwidth: PropTypes.bool,
};

export default Button;

import PropTypes from "prop-types";
import clsx from "clsx";

const Sticky = ({ children, className, top = "100px" }) => (
    <div className={clsx("widge-wrapper", className)} style={{ top }}>
        {children}
    </div>
);

Sticky.propTypes = {
    children: PropTypes.node.isRequired,
    className: PropTypes.string,
    top: PropTypes.string,
};

export default Sticky;

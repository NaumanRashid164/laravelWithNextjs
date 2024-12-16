import clsx from "clsx";

const OffcanvasHeader = ({ className, onClick, children }) => (
    <div className={clsx("header-top", className)}>
        {children}
        <div className="close-menu">
            <button className="close-button" type="button" onClick={onClick}>
                <i className="feather-x" />
            </button>
        </div>
    </div>
);

export default OffcanvasHeader;

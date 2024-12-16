/* eslint-disable react/prop-types */
import { Range } from "react-range";
import PropTypes from "prop-types";
import Button from "@ui/button";
import clsx from "clsx";

import { getTrackBackground } from "react-range";
const STEP = 1;
const MIN = 0;
const MAX = 100;

const InputRange = ({ values, onChange, hideButton = false }) => {
    const renderTrack = ({ props, children }) => {
        {
            const colors = [
                "var(--color-primary-alta)",
                "var(--color-primary)",
                "var(--color-primary-alta)",
            ];
            const background = getTrackBackground({
                values: [...values].sort((a, b) => a - b),
                MIN,
                MAX,
                colors,
            });

            return (
                <div
                    className="slider-track-container"
                    style={{ ...props.style, background }}
                >
                    <div className="slider-track" ref={props.ref}>
                        {children}
                    </div>
                </div>
            );
        }
    };

    const SliderThumb = ({ props, isDragged }) => {
        const { key, ...rest } = props;
        return (
            <div
                key={key}
                className="slider-thumb-container"
                style={rest.style}
                {...rest}
            >
                <div
                    className={clsx("slider-thumb", {
                        "is-dragged": isDragged,
                    })}
                    style={{
                        ...rest.style,
                    }}
                />
            </div>
        );
    };
    return (
        <div className="input-range">
            <Range
                step={STEP}
                min={MIN}
                max={MAX}
                values={values}
                onChange={(vals) => onChange(vals)}
                renderTrack={renderTrack}
                renderThumb={SliderThumb}
            />
            <div className="slider__range--output">
                <div className="price__output--wrap">
                    <div className="price--output">
                        <span>Price :</span>
                        <span className="output-label">
                            ${values[0] || 0 / 100} - ${values[1] || 0 / 100}
                        </span>
                    </div>
                    {hideButton === false && (
                        <div className="price--filter">
                            <Button size="small" path="#!">
                                Filter
                            </Button>
                        </div>
                    )}
                </div>
            </div>
        </div>
    );
};

InputRange.propTypes = {
    values: PropTypes.arrayOf(PropTypes.number),
    onChange: PropTypes.func,
    hideButton: PropTypes.bool,
};

export default InputRange;

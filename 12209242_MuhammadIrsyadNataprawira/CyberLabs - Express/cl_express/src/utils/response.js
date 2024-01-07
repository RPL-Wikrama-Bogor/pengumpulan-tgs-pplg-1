const response = (statusCode, data, message, res) => {
    res.status(statusCode).json({
        payload: {
            status_code: statusCode,
            data: data,
            message: message,
        }
    });
}

module.exports = response;
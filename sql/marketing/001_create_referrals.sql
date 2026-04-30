-- =============================================================================
-- 001_create_referrals.sql
-- Tabla para tracking del programa de referidos del sitio comercial psyrisksite.
-- Idempotente: CREATE TABLE IF NOT EXISTS — seguro de re-ejecutar.
-- =============================================================================

CREATE TABLE IF NOT EXISTS `referrals` (
    `id`              INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `referrer_email`  VARCHAR(190) NOT NULL,
    `referrer_name`   VARCHAR(120) DEFAULT NULL,
    `referred_email`  VARCHAR(190) NOT NULL,
    `referred_name`   VARCHAR(120) DEFAULT NULL,
    `message`         TEXT DEFAULT NULL,
    `token`           VARCHAR(64) NOT NULL,
    `status`          ENUM('pending','signed_up','rewarded') NOT NULL DEFAULT 'pending',
    `utm_source`      VARCHAR(64) DEFAULT NULL,
    `utm_medium`      VARCHAR(64) DEFAULT NULL,
    `utm_campaign`    VARCHAR(64) DEFAULT NULL,
    `email_sent_at`   DATETIME DEFAULT NULL,
    `signed_up_at`    DATETIME DEFAULT NULL,
    `rewarded_at`     DATETIME DEFAULT NULL,
    `ip_address`      VARCHAR(45) DEFAULT NULL,
    `user_agent`      VARCHAR(255) DEFAULT NULL,
    `created_at`      DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `uniq_token` (`token`),
    KEY `idx_referrer_email` (`referrer_email`),
    KEY `idx_referred_email` (`referred_email`),
    KEY `idx_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================================================
-- DOWN (rollback) — descomentar para revertir
-- =============================================================================
-- DROP TABLE IF EXISTS `referrals`;
